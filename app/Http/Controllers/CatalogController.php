<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Items;
use App\Service\Category\CategoryService;
use App\Service\FotoramaService\FotoramaService;
use App\Service\Item\ItemService;
use App\Service\ItemFiltersService\ItemFiltersService;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $category = Category::with('parent')->get();

        return view('user.catalog.catalog', compact('category'));
    }
    public function products_filters_list(Request $req, CategoryService $categoryService, ItemFiltersService $item_filters_service)
    {
        $category = $categoryService->getCategories();
        $category_current = $categoryService->getCurrentCategory($req->name ?? '');
        $items = $category_current->items->merge($category_current->sub_category->flatMap->items);

        $values = $item_filters_service->getStats($items);

        return view('user.catalog.products_filters_list', compact('category', 'category_current', 'items','values'));
    }
    public function product(Request $req, CategoryService $categoryService, ItemFiltersService $item_filters_service)
    {
        $category = $categoryService->getCategories();
        $category_current = $categoryService->getCurrentCategory($req->sub_name ?? '');
        $items = $category_current->items->merge($category_current->sub_category->flatMap->items);

        $values = $item_filters_service->getStats($items);

        return view('user.catalog.products_filters_list', compact('category', 'category_current', 'items','values'));
    }
    public function filter(Request $req, CategoryService $categoryService, ItemService $itemService, ItemFiltersService $item_filters_service)
    {
        $category = $categoryService->getCategories();
        $category_current = $categoryService->getCurrentCategory($req->sub_name ?? '');
        $filters = $req->only(['min_price', 'max_price', 'Высота', 'Ширина', 'Толщина', 'Материал', 'Направление_открывания']);

        $query = $itemService->getItems($category_current)->toQuery();
        if (isset($filters['min_price']) && isset($filters['max_price'])) {
            $query->whereHas('entity.items_stats', function ($q) use ($filters) {
                $q->join('stats_names', 'items_stats.stats_name_id', '=', 'stats_names.id')
                    ->join('stats_values', 'items_stats.stats_value_id', '=', 'stats_values.id')
                    ->where('stats_names.stats_names', 'price')
                    ->whereBetween('stats_values.value', [$filters['min_price'], $filters['max_price']]);
            });
        }

        foreach (['Высота', 'Ширина', 'Толщина', 'Материал', 'Направление_открывания'] as $filterName) {
            if (isset($filters[$filterName])) {
                $query->whereHas('entity.items_stats', function ($q) use ($filterName, $filters) {
                    $q->join('stats_names', 'items_stats.stats_name_id', '=', 'stats_names.id')
                        ->join('stats_values', 'items_stats.stats_value_id', '=', 'stats_values.id')
                        ->where('stats_names.stats_names', $filterName)
                        ->whereIn('stats_values.value', (array)$filters[$filterName]);
                });
            }
        }

        session(['min_price' => $req->min_price]);
        session(['max_price' => $req->max_price]);
        session()->put('height', $req->input('Высота'));
        session()->put('width', $req->input('Ширина'));
        session()->put('thickness', $req->input('Толщина'));
        session()->put('compound', $req->input('Материал'));
        session()->put('opening_direction', $req->input('Направление_открывания'));

        $items = $query->get();

        $values = $item_filters_service->getStats($items);

        return view('user.catalog.products_filters_list', compact('category_current', 'category', 'items','values'));
    }
    public function card_product(CategoryService $categoryService, $item_id,FotoramaService $fotoramaService)
    {
        $item = Items::find($item_id)->loadMissing([
            'entity.items_stats.stats_name',
            'entity.items_stats.stats_value'
        ]);

        $galleryImages = $fotoramaService->getFotoramaImages($item);

        $category = $categoryService->getCategories();
        return view('user.catalog.product', compact('category','item','galleryImages'));
    }
}
