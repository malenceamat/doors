<?php

namespace App\Http\Controllers;


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
}
