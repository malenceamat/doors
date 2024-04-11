<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index($id = null)
    {
        $slider = $id ? Slider::find($id) : new Slider();
        return view('admin.content.slider.slider_create',compact('slider'));
    }
    public function create(SliderRequest $req)
    {
        $helper = new BaseHelperController();
        Slider::create(array_merge($req->all(),['image' => $helper->store_base64_image($req['image'])]) );
        return back();
    }
    public function show()
    {
        $sliders = Slider::orderBy('created_at')->get();
        return view('admin.content.slider.slider_show', compact('sliders'));
    }
    public function update(Request $req)
    {
        $helper = new BaseHelperController();

        $slider = Slider::find($req['id']);
        if (!empty($slider) && $req['image'] != null) {
            Storage::disk('public')->delete('image', $slider['image']);
            $slider['image']  = $helper->store_base64_image($req['image']);
        }
        $slider->fill($req->only('title', 'subtitle', 'button_text', 'button_link'))->save();
        return redirect(route('slider_show'));
    }
}
