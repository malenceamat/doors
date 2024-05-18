<?php

namespace App\Service\ItemFiltersService;

use App\Models\Items;
use Illuminate\Database\Eloquent\Collection;

class ItemFiltersService
{
    public function getUniqueValues(array $stats_name_id, Collection $items): array
    {
        $result = [];

        foreach ($stats_name_id as $stats_id) {
            $result[$stats_id] = collect($items)
                ->pluck('entity')
                ->flatten()
                ->pluck('items_stats')
                ->flatten()
                ->where('stats_name_id', $stats_id)
                ->pluck('stats_value')
                ->pluck('value')
                ->unique()
                ->toArray();
        }

        return $result;
    }
    public function getStats(Collection $items): array
    {
        $statsNameIds = [5, 6, 7, 8, 9];
        $unique = $this->getUniqueValues($statsNameIds, $items); // Передаем $items

        [$heights, $widths, $thickness, $compounds, $opening_directions] = array_values($unique);

        return [
            'Высота' => $heights,
            'Ширина' => $widths,
            'Толщина' => $thickness,
            'Материал' => $compounds,
            'Направление открывания' => $opening_directions,
        ];
    }
}
