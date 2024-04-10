<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.content.slider.slider_create');
    }
    public function create(SliderRequest $req)
    {
        $helper = new BaseHelperController();
        Slider::create(array_merge($req->all(),['image' => $helper->store_base64_image($req['image'])]) );
        return back();
    }
    public function show()
    {
        $slider = Slider::get();
        return view('admin.content.slider.slider_show', compact('slider'));
    }
}
