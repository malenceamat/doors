<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Category;
use App\Models\News;
use App\Models\PayDelivery;
use App\Service\Category\CategoryService;
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

        return view('user.contacts.contacts', compact('category'));
    }
    public function catalog_index()
    {
        $category = Category::with('parent')->get();

        return view('user.catalog.catalog', compact('category'));
    }
    public function products_filters_list(Request $req, CategoryService $categoryService)
    {
        $category = $categoryService->getCategories();
        $category_current = $categoryService->getCurrentCategory($req->name ?? '');
        $items = $category_current->items->merge($category_current->sub_category->flatMap->items);

        return view('user.catalog.products_filters_list', compact('category', 'category_current', 'items'));
    }
    public function product(Request $req, CategoryService $categoryService)
    {
        $category = $categoryService->getCategories();
        $category_current = $categoryService->getCurrentCategory($req->sub_name ?? '');
        $items = $category_current->items->merge($category_current->sub_category->flatMap->items);

        return view('user.catalog.products_filters_list', compact('category', 'category_current', 'items'));
    }
    public function filter(Request $req, CategoryService $categoryService)
    {
        $category = $categoryService->getCategories();
        $category_current = $categoryService->getCurrentCategory($req->sub_name ?? '');

        $filters = $req->only(['min_price', 'max_price', 'height', 'width', 'thickness', 'compound', 'opening_direction']);

        $query = $category_current->items->map(function ($item) {
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
        )->toQuery();

        if ($filters['min_price'] || $filters['max_price']) {
            $query->whereBetween('price', [$filters['min_price'], $filters['max_price']]);
        }

        if (isset($filters['height'])) {
            echo 123;
        }

        if (isset($filters['width'])) {
            echo 456;
        }

        if (isset($filters['thickness'])) {
            echo 78;
        }

        if (isset($filters['compound'])) {
            echo 90;
        }

        if (isset($filters['opening_direction'])) {
            echo 12;
        }
        session(['min_price' => $req->min_price]);
        session(['max_price' => $req->max_price]);
        session(['height' => $req->height]);
        session(['width' => $req->width]);
        session(['thickness' => $req->thickness]);
        session(['compound' => $req->compound]);
        session(['opening_direction' => $req->opening_direction]);

        $items = $query->get();

        return view('user.catalog.products_filters_list', compact('category_current', 'category', 'items'));
    }
}
