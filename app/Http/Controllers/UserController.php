<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Contact;
use App\Models\InfoBlock;
use App\Models\News;
use App\Models\PayDelivery;
use App\Models\Slider;

class UserController extends Controller
{
    public function index()
    {
        $category = Category::with('parent')->get();
        $sliders = Slider::get();
        $info_blocks = InfoBlock::get();
        $banner = Banner::first();

        return view('user.content.general', compact('category','sliders','info_blocks','banner'));
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
}
