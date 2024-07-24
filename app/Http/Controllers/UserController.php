<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\InfoBlock;
use App\Models\Items;
use App\Models\News;
use App\Models\Partners;
use App\Models\PayDelivery;
use App\Models\Slider;
use App\Service\Category\CategoryService;
use App\Service\EntityItemService\EntityItemService;
use App\Service\Item\ItemService;
use App\Service\ItemFiltersService\ItemFiltersService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index(EntityItemService $entityItemService)
    {
        $category = Category::with('parent')->get();
        $sliders = Slider::get();
        $info_blocks = InfoBlock::get();
        $banner = Banner::first();
        $news = News::get()->take(3);
        $blog = Blog::first();
        $partners = Partners::get();
        $items = Items::get()->loadMissing([
            'entity.items_stats.stats_name',
            'entity.items_stats.stats_value',
            'favorites',
            'entity.order'
        ]);

        $favorites_item = $entityItemService->getFavoritesAll();
        $order = $entityItemService->getOrderItems();

        return view('user.content.index', compact('category','sliders','info_blocks','banner','news','blog','partners','items','order','favorites_item'));
    }
    public function shop(Request $req,CategoryService $categoryService,ItemFiltersService $item_filters_service, EntityItemService $entityItemService)
    {
        $favorites_item = $entityItemService->getFavoritesAll();
        $order = $entityItemService->getOrderItems();

        $category = Category::with('parent')->get();
        $parent_category = $categoryService->getCurrentCategory($req->name ?? '');

        $sub_category = $categoryService->getCurrentCategory($req->sub_name ?? '');
        if ($req->sub_name) {
            $items_values = $sub_category->items;
            $items = $sub_category->items()->paginate(9);
        } else {
            $items_values = $parent_category->items->merge($parent_category->sub_category->flatMap->items);
            $items = Items::where('category_id', $parent_category->id)
                ->orWhereIn('category_id', $parent_category->sub_category->pluck('id'))
                ->paginate(9);
        }

        $values = $item_filters_service->getStats($items_values);

        return view('user.shop.shop', compact('category','items','values','parent_category','sub_category','favorites_item','order'));
    }
    public function filter(Request $req, ItemService $itemService)
    {
        $filters = $req->only(['min_price', 'max_price', 'Высота', 'Ширина', 'Толщина', 'Материал', 'Направление_открывания']);

        if ($req->input('sub_category')) {
            $category_current = Category::where('name', $req->input('sub_category'))->first();
        } else if ($req->input('parent_category')) {
            $category_current = Category::where('name', $req->input('parent_category'))->first();
        }

        $query = $itemService->getItems($category_current)->toQuery();

        if (isset($filters['min_price']) && isset($filters['max_price'])) {
            $query->whereHas('entity.items_stats', function ($q) use ($filters) {
                $q->join('stats_names', 'items_stats.stats_name_id', '=', 'stats_names.id')
                    ->join('stats_values', 'items_stats.stats_value_id', '=', 'stats_values.id')
                    ->where('stats_names.stats_names', 'price')
                    ->whereRaw("stats_values.value ~ '^[0-9]+$'")
                    ->whereRaw('CAST(stats_values.value AS INTEGER) BETWEEN ? AND ?', [(int)$filters['min_price'], (int)$filters['max_price']]);
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

        $items = $query->get();

        return view('user.shop.product', ['items' => $items])->render();
    }
    public function about_index(EntityItemService $entityItemService)
    {
        $favorites_item = $entityItemService->getFavoritesAll();
        $order = $entityItemService->getOrderItems();

        $category = Category::with('parent')->get();
        $about = About::first();

        return view('user.about.about', compact('category', 'about','favorites_item','order'));
    }
    public function contacts_index(EntityItemService $entityItemService)
    {
        $favorites_item = $entityItemService->getFavoritesAll();
        $order = $entityItemService->getOrderItems();

        $category = Category::with('parent')->get();
        $contacts = Contact::first();

        return view('user.contact.contact', compact('category','contacts','favorites_item','order'));
    }
    public function delivery(EntityItemService $entityItemService)
    {
        $favorites_item = $entityItemService->getFavoritesAll();
        $order = $entityItemService->getOrderItems();

        $category = Category::with('parent')->get();
        $pay_delivery = PayDelivery::first();

        return view('user.pay_delivery.delivery', compact('category', 'pay_delivery','favorites_item','order'));
    }
}
