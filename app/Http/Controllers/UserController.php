<?php

namespace App\Http\Controllers;


use App\Models\News;

class UserController extends Controller
{
    public function index()
    {
        return view('user.content.general');
    }
    public function index_pay_delivery()
    {
        return view('user.pay_delivery.pay_delivery');
    }
    public function about_index()
    {
        return view('user.about.about');
    }
    public function news_index()
    {
        return view('user.news.news', ['news' => News::get()]);
    }
    public function news_index_id($id)
    {
        $data = News::get();
        $news = News::find($id);

        return view('user.news.news_index', ['id' => $id],compact('news','data'));
    }
}
