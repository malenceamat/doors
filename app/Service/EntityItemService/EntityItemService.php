<?php
namespace App\Service\EntityItemService;

use App\Models\Items;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class EntityItemService
{
    /**
     * Получить элементы корзины заказов пользователя
     *
     * @return Collection
     */
    public function getOrderItems()
    {
        if (Auth::check()) {
            $orderCartItems = Auth::user()->order_cart;

            // Сначала получаем все уникальные товары
            $uniqueEntityItems = Items::with('entity.items_stats.stats_name','entity.items_stats.stats_value')
                ->whereIn('id', $orderCartItems->pluck('entity_item_id')->unique())
                ->get();


            // Создаем коллекцию для дублированных товаров
            $allItems = collect();

            // Добавляем дублированные товары
            foreach ($orderCartItems as $orderCartItem) {
                $item = $uniqueEntityItems->where('id', $orderCartItem->entity_item_id)->first();
                $allItems->push($item);
            }
            return $allItems;
        }
        return collect();
    }
    public function getFavoritesAll()
    {
        if (Auth::check()) {
            $favorites = Auth::user()->favorites_cart;

            // Сначала получаем все уникальные товары
            $uniqueFavoritesItems = Items::with('entity.items_stats.stats_name','entity.items_stats.stats_value')
                ->whereIn('id', $favorites->pluck('item_id')->unique())
                ->get();

            // Создаем коллекцию для дублированных товаров
            $allItems = collect();

            // Добавляем дублированные товары
            foreach ($uniqueFavoritesItems as $uniqueFavoritesItem) {
                $item = $uniqueFavoritesItem->where('id', $uniqueFavoritesItem->id)->first();
                $allItems->push($item);
            }
            return $allItems;
        }
        return collect();
    }
}
