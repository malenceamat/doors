<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
