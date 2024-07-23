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

                        // возможные характеристики сайта
                        $stats_names = StatsName::pluck('id', 'stats_names')->toArray();

                        // создаем или обновляем entity товара
                        $entity_items = EntityItem::updateOrCreate([
                            'items_id' => $itemEntity['id'],
                        ]);

                        foreach ($stats_names as $name => $id) {
                            if (isset($item[$name])) {
                                $stats_id = ItemsStats::where('entity_item_id', $entity_items->id)
                                    ->where('stats_name_id', $id)
                                    ->select('id', 'stats_value_id')->first();
                                if (!empty($stats_id)) {
                                    StatsValue::where('id', $stats_id['id'])->update(['value' => $item[$name]]);
                                } else {
                                    $stats_value = StatsValue::create(['value' => $item[$name]]);
                                    if (isset($id)) {
                                        ItemsStats::create([
                                            'entity_item_id' => $entity_items->id,
                                            'stats_name_id' => $id,
                                            'stats_value_id' => $stats_value->id
                                        ]);
                                    }
                                }
                            }
                        }
                    }

                    return response('Товары обновлены или созданы');

                case 2:
                    foreach ($data_json as $category) {
                        Category::updateOrCreate(
                            [
                                'id_1c' => $category['id_1C']
                            ],
                            [
                                'name' => $category['namesite'],
                                'image_path' => null,
                                'parent_id' => $category['parent_id']
                            ]
                        );
                    }

                    return response('Категории обновлены или созданы');

                case 3:
                    foreach ($data_json as $image) {
                        dd($image);

                    }


                    for ($i = 1; $i < count($data_json); $i++) {
                        $data = $data_json[$i];

                        //Сохранение фотографии
                        $fileName = "json/" . $data['filename'] . '.' . $data['file_extension'];
                        Storage::disk('public')->put($fileName, base64_decode($data['b64img']));

                        // Поиск товара, в котором нужно обновить фотографию
                        $item = Items::find($data['parent'])->loadMissing('entity.items_stats.stats_name', 'entity.items_stats.stats_value');

                        // Поиск соответствующей характеристики товара
                        $itemsStat = ItemsStats::where('entity_item_id', $item->id)
                            ->where('stats_name_id', StatsName::where('stats_names', 'image')->value('id'))
                            ->first()->stats_value_id;

                        // Поиск соответствующего значения характеристики
                        $stats_value = StatsValue::where('id', $itemsStat)->first();

                        // Если значение найдено, обновление записи
                        if ($stats_value) {
                            $stats_value->update(['value' => $fileName]);
                        }
                    }
                    return response('Изображение обработано и сохранено');
            }
        }
    }
}
