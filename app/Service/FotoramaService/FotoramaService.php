<?php

namespace App\Service\FotoramaService;

class FotoramaService
{
    public function getFotoramaImages($item)
    {
        return $item->entity->flatMap(function ($entity) {
            return $entity->items_stats->where('stats_name_id', 3)->map(function ($image) {
                return [
                    'src' => asset('/storage/' . $image->stats_value->value),
                    'thumbSrc' => asset('storage/' . $image->stats_value->value),
                    'alt' => '', // Замените на нужный alt-текст
                    'data-fotorama-target' => 'img-' . $image->id,
                    'data-image-id' => $image->id,
                ];
            });
        });
    }
}
