<?php

namespace App\Service\Item;

use Illuminate\Database\Eloquent\Builder;
class ItemService
{
    public function getItems($category_current)
    {
        return $category_current->items->map(function ($item) {
            return $item->loadMissing([
                'entity.items_stats.stats_name',
                'entity.items_stats.stats_value'
            ]);
        })->concat(
            $category_current->sub_category->flatMap->items->map(function ($item) {
                return $item->loadMissing([
                    'entity.items_stats.stats_name',
                    'entity.items_stats.stats_value'
                ]);
            })
        );
    }
}
