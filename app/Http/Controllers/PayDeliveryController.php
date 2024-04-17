<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayDeliveryController extends Controller
{
    public function index()
    {
        return view('admin.content.pay_delivery.pay_delivery');
    }
}
