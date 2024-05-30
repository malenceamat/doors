<?php

namespace App\Http\Controllers;

use App\Http\Requests\PayDeliveryRequest;
use App\Models\PayDelivery;
use Illuminate\Support\Facades\Auth;

class PayDeliveryController extends Controller
{
    public function index()
    {
        $pay_delivery = PayDelivery::firstOrCreate();

        return view('admin.content.pay_delivery.pay_delivery',compact('pay_delivery'));
    }
    public function create(PayDeliveryRequest $req)
    {
        PayDelivery::first()->update($req->all());

        return redirect()->route('pay_delivery_index');
    }
}
