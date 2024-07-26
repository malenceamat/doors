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
    protected function updateOrCreateStats($entity_items, $stats_names, $data, $isImage = false)
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
                    foreach ($data_json as $item) {
                        $itemEntity = Items::updateOrCreate(
                            [
                                'id_1c' => $item['id_1C']
                            ],
                            [
                                'name' => $item['namesite'],
                                'category_id' => $item['category_id'],
                                'description' => $item['description'],
                                'is_popular' => $item['popular'],
                                'is_stock' => $item['stock'],
                                'is_new_items' => $item['new_items'],
                                'is_active' => $item['is_active'],
                                'npp' => $item['npp'],
                            ]
                        );

                        // создаем или обновляем entity товара
                        $entity_items = EntityItem::updateOrCreate([
                            'items_id' => $itemEntity['id'],
                        ]);

                        $this->updateOrCreateStats($entity_items, $stats_names, $item);
                    }

                    return response('Товары обновлены или созданы');

                // Обновляем или создаем Категории
                case 2:

                    // Собираем все parent_id
                    $parentIds = collect($data_json)->pluck('parent_id')->filter()->unique();

                    // Получаем все родительские категории
                    $parentCategories = Category::whereIn('id_1c', $parentIds)->get()->keyBy('id_1c');

                    // Обрабатываем категории
                    foreach ($data_json as $category) {
                        if (isset($category['id_1C'])) {
                            // Создаем или обновляем категории без учета parent_id
                            $newCategory = Category::updateOrCreate(
                                [
                                    'id_1c' => $category['id_1C']
                                ],
                                [
                                    'name' => $category['namesite'],
                                    'parent_id' => null // Изначально устанавливаем parent_id в null
                                ]
                            );

                            // Если у категории есть parent_id, обновите её
                            if (isset($category['parent_id']) && $parentCategories->has($category['parent_id'])) {
                                $newCategory->update(['parent_id' => $parentCategories[$category['parent_id']]->id]);
                            }
                        }
                    }

                    return response('Категории обновлены или созданы');

                // Обновляем фотографию к товару
                case 3:
                    foreach ($data_json as $image) {

                        //Сохранение фотографии
                        $fileName = "json/" . $image['filename'] . '.' . $image['file_extension'];
                        Storage::disk('public')->put($fileName, base64_decode($image['image']));

                        // Поиск товара, в котором нужно обновить фотографию
                        $items = Items::with('entity.items_stats.stats_name', 'entity.items_stats.stats_value')->find($image['parent']);

                        foreach ($items->entity as $item) {
                            $this->updateOrCreateStats($item, $stats_names, $image, true);

                        }
                    }

                    return response('Изображение обработано и сохранено');
            }
        }
    }
}
