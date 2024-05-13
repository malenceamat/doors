<?php

namespace App\Service\ItemFiltersService;

use App\Models\Items;

class ItemFiltersService
{
    public function getUniqueValues(array $stats_name_id): array
    {
        $result = [];

        $items = Items::with(['entity.items_stats' => function ($query) use ($stats_name_id) {
            $query->whereIn('stats_name_id', $stats_name_id);
        }])->get();

        foreach ($stats_name_id as $stats_id) {
            $result[$stats_id] = $items->pluck('entity')
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
    public function getStats(): array
    {
        $statsNameIds = [4, 5, 6, 7, 8];
        $unique = $this->getUniqueValues($statsNameIds);

        [$heights, $widths, $thickness, $compounds, $opening_directions] = array_values($unique);

        return [
            'heights' => $heights,
            'widths' => $widths,
            'thickness' => $thickness,
            'compounds' => $compounds,
            'opening_directions' => $opening_directions,
        ];
    }
}
