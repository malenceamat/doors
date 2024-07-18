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
        $data_json = json_decode($req->getContent(), true);

        $fileName = null;

        $infoget = $data_json[0]['infoget'] ?? [];

        // Категории

        if ($infoget[0]['opc'] == 2) {
            for ($i = 1; $i < count($data_json); $i++) {
                $category = $data_json[$i];
                Category::updateOrCreate([
                    'id_1c' => $category['id_1C'],
                    'name' => $category['namesite'],
                    'image_path' => null,
                    'parent_id' => $category['parent_id']
                ]);
            }
            return response('Категории обновлены или созданы');
        }

        // Товар

        if ($infoget[0]['opc'] == 1) {
            for ($i = 1; $i < count($data_json); $i++) {
                $data = $data_json[$i];
                $item = Items::updateOrCreate([
                    'id_1c' => $data['id_1C'],
                    'name' => $data['namesite'],
                    'category_id' => $data['category_id'],
                    'description' => $data['description'],
                    'is_popular' => $data['popular'],
                    'is_stock' => $data['stock'],
                    'is_new_items' => $data['new_items'],
                    'is_active' => $data['is_active'],
                    'npp' => $data['npp'],
                ]);

                $entity_items = EntityItem::updateOrCreate([
                    'items_id' => $item['id'],
                ]);

                $stats_values = [
                    'Цена' => $data['price'],
                    'price_dealer' => $data['price'],
                    'image' => $fileName,
                    'image_path' => null,
                    'Высота' => $data['height'] ?? null,
                    'Ширина' => $data['width'] ?? null,
                    'Толщина' => $data['thickness'] ?? null,
                    'Материал' => $data['material'] ?? null,
                    'Направление_открывания' => $data['opening_direction'] ?? null
                ];

                $stats_names = StatsName::pluck('id', 'stats_names')->toArray();

                foreach ($stats_values as $name => $value) {
                    $stats_value = StatsValue::create(['value' => $value]);
                    if (isset($stats_names[$name])) {
                        ItemsStats::create([
                            'entity_item_id' => $entity_items->id,
                            'stats_name_id' => $stats_names[$name],
                            'stats_value_id' => $stats_value->id
                        ]);
                    }
                }
            }
            return response('Товары обновлены или созданы');
        }

        // Изображение

        if ($infoget[0]['opc'] == 3) {
            for ($i = 1; $i < count($data_json); $i++) {
                $data = $data_json[$i];

                //Сохранение фотографии
                $fileName = "json/" . $data['filename'] . '.' . $data['file_extension'];
                Storage::disk('public')->put($fileName, base64_decode($data['b64img']));

                // Поиск товара, в котором нужно обновить фотографию
                $item = Items::find($data['parent'])->loadMissing('entity.items_stats.stats_name','entity.items_stats.stats_value');

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
