<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Category;
use App\Models\News;
use App\Models\PayDelivery;
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

        return view('user.pay_delivery.pay_delivery', compact('category','pay_delivery'));
    }
    public function about_index()
    {
        $category = Category::with('parent')->get();
        $about = About::first();
        return view('user.about.about', compact('category','about'));
    }
    public function news_index()
    {
        $category = Category::with('parent')->get();
        $news = News::get();
        return view('user.news.news',compact('category','news'));
    }
    public function news_index_id($id)
    {
        $data = News::get();
        $news = News::find($id);
        $category = Category::with('parent')->get();

        return view('user.news.news_index', ['id' => $id],compact('news','data','category'));
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
    public function products_filters_list(Request $req)
    {
        $category = Category::with('parent')->get();
        $category_show = Category::with('sub_category')->where('name', 'like', '%'. $req->name)->first();
        return view('user.catalog.products_filters_list', compact('category','category_show'));
    }
    public function product()
    {
        $category = Category::with('parent')->get();

        return view('', compact('category'));
    }
}
