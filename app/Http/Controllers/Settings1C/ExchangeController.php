<?php

namespace App\Http\Controllers\Settings1C;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EntityItem;
use App\Models\Items;
use App\Models\ItemsStats;
use App\Models\StatsName;
use App\Models\StatsValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExchangeController extends Controller
{
    protected function updateOrCreateStats($entity_items, $stats_names, $data)
    {
        foreach ($stats_names as $name => $id) {
            if (isset($data[$name])) {
                $itemsStat = ItemsStats::where('entity_item_id', $entity_items->id)
                    ->where('stats_name_id', $id)
                    ->select('id', 'stats_value_id')->first();

                if (!empty($itemsStat)) {
                    StatsValue::where('id', $itemsStat->stats_value_id)
                        ->update(['value' => $data[$name]]);
                } else {
                    $stats_value = StatsValue::create(['value' => $data[$name]]);
                    ItemsStats::create([
                        'entity_item_id' => $entity_items->id,
                        'stats_name_id' => $id,
                        'stats_value_id' => $stats_value->id
                    ]);
                }
            }
        }
    }

    public function update_create(Request $req)
    {
        // получаем json из запроса
        $data_json = json_decode($req->getContent(), true);

        if (!empty($data_json)) {
            // первая запись json всегда является информационной, достаем ее отдельно
            $get_info = array_shift($data_json);
            if (!isset($get_info['infoget'][0])) {
                return response('Отсутвует информационная запись массива');
            } else {
                $get_info = $get_info['infoget'][0];
            }

            // Возможные характеристики сайта
            $stats_names = StatsName::pluck('id', 'stats_names')->toArray();


            // Обновляем или создаем Товары
            switch ($get_info['opc']) {
                case 1:

                    $id = collect($data_json)->pluck('category_id');

                    $categories = Category::whereIn('id_1c', $id)->select(['id', 'id_1c'])->get()->keyBy('id_1c');

                    foreach ($data_json as $item) {
                        // Получаем объект категории на основе category_id
                        $category = isset($item['category_id']) ? $categories->get($item['category_id']) : null;

                        // Создаем или обновляем товар
                        $itemEntity = Items::updateOrCreate(
                            [
                                'id_1c' => $item['id_1C']
                            ],
                            [
                                'name' => $item['namesite'],
                                'category_id' => $category ? $category->id : null,
                                'description' => $item['description'],
                                'is_popular' => $item['popular'],
                                'is_stock' => $item['stock'],
                                'is_new_items' => $item['new_items'],
                                'is_active' => $item['is_active'],
                                'npp' => $item['npp'],
                            ]
                        );

                        // Создаем или обновляем entity товара
                        $entity_items = EntityItem::updateOrCreate([
                            'items_id' => $itemEntity['id'],
                        ]);

                        // Создаем или обновляем характеристики товара
                        $this->updateOrCreateStats($entity_items, $stats_names, $item);
                    }

                    return response('Товары обновлены или созданы');

                // Обновляем или создаем Категории
                case 2:

                    usort($data_json, function ($a, $b) {
                        if (!isset($a['parent_id']) || $a['parent_id'] === null) {
                            return -1;
                        } elseif (!isset($b['parent_id']) || $b['parent_id'] === null) {
                            return 1;
                        }
                        return 0;
                    });

                    foreach ($data_json as $category) {
                        if (isset($category['id_1C'])) {
                            $parent_keys[$category['id_1C']] = Category::updateOrCreate(
                                [
                                    'id_1c' => $category['id_1C']
                                ],
                                [
                                    'name' => $category['namesite'],
                                    'parent_id' => $parent_keys[$category['parent_id']]['id'] ?? null
                                ]
                            );
                        }
                    }

                    return response('Категории обновлены или созданы');

                // Обновляем фотографию к товару
                case 3:
                    foreach ($data_json as $image) {

                        //Сохранение фотографии
                        $fileName = "json/" . $image['filename'] . '.' . 'jpg';
                        Storage::disk('public')->put($fileName, base64_decode($image['image']));

                        // Поиск товара, в котором нужно обновить фотографию
                        $items = Items::with('entity.items_stats.stats_name', 'entity.items_stats.stats_value')
                            ->where('id_1c', $image['id_1C'])
                            ->first();

                        foreach ($items->entity as $item) {
                            // Создаем массив данных для статистики
                            $statsData = [];

                            foreach ($stats_names as $name => $id) {
                                if (isset($image[$name])) {
                                    // Сохраняем путь к изображению в массиве данных
                                    $statsData[$name] = $fileName;
                                }
                            }

                            $this->updateOrCreateStats($item, $stats_names, $statsData);
                        }
                    }

                    return response('Изображение обработано и сохранено');
            }
        }
    }
}
