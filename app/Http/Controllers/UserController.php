<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\News;
use App\Models\PayDelivery;
use App\Service\Category\CategoryService;
use App\Service\Item\ItemService;
use App\Service\ItemFiltersService\ItemFiltersService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $category = Category::with('parent')->get();

        return view('user.content.general', compact('category'));
    }

    public function index_pay_delivery()
    {
        $category = Category::with('parent')->get();
        $pay_delivery = PayDelivery::first();

        return view('user.pay_delivery.pay_delivery', compact('category', 'pay_delivery'));
    }

    public function about_index()
    {
        $category = Category::with('parent')->get();
        $about = About::first();

        return view('user.about.about', compact('category', 'about'));
    }

    public function news_index()
    {
        $category = Category::with('parent')->get();
        $news = News::get();

        return view('user.news.news', compact('category', 'news'));
    }
    public function news_index_id($id)
    {
        $data = News::get();
        $news = News::find($id);
        $category = Category::with('parent')->get();

        return view('user.news.news_index', ['id' => $id], compact('news', 'data', 'category'));
    }
    public function contacts_index()
    {
        $category = Category::with('parent')->get();
        $contacts = Contact::first();

        return view('user.contacts.contacts', compact('category','contacts'));
    }
    public function catalog_index()
    {
        $category = Category::with('parent')->get();

        return view('user.catalog.catalog', compact('category'));
    }
    public function products_filters_list(Request $req, CategoryService $categoryService, ItemService $itemService, ItemFiltersService $item_filters_service)
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

        $filters = $req->only(['min_price', 'max_price', 'height', 'width', 'thickness', 'compound', 'opening_direction']);

        $query = $itemService->getItems($category_current)->toQuery();

        if (isset($filters['min_price']) && isset($filters['max_price'])) {
            $query->whereHas('entity.items_stats', function ($q) use ($filters) {
                $q->join('stats_names', 'items_stats.stats_name_id', '=', 'stats_names.id')
                    ->join('stats_values', 'items_stats.stats_value_id', '=', 'stats_values.id')
                    ->where('stats_names.stats_names', 'price')
                    ->whereBetween('stats_values.value', [$filters['min_price'], $filters['max_price']]);
            });
        }

        foreach (['height', 'width', 'thickness', 'compound', 'opening_direction'] as $filterName) {
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
        session()->put('height', $req->input('height'));
        session()->put('width', $req->input('width'));
        session()->put('thickness', $req->input('thickness'));
        session()->put('compound', $req->input('compound'));
        session()->put('opening_direction', $req->input('opening_direction'));

        $items = $query->get();

        $values = $item_filters_service->getStats($items);

        return view('user.catalog.products_filters_list', compact('category_current', 'category', 'items','values'));
    }
}
