<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index($id = null)
    {
        $slider = $id ? Slider::find($id) : new Slider();
        $check_role = Auth::user();

        return view('admin.content.slider.slider_create',compact('slider','check_role'));
    }
    public function create(SliderRequest $req)
    {
        $helper = new BaseHelperController();

        Slider::create(array_merge($req->all(),['image' => $helper->store_base64_image($req['image'])]) );

        return redirect()->route('slider_show');
    }
    public function show()
    {
        $sliders = Slider::orderBy('created_at')->get();
        $check_role = Auth::user();

        return view('admin.content.slider.slider_show', compact('sliders','check_role'));
    }
    public function update(SliderRequest $req)
    {
        $helper = new BaseHelperController();

        $slider = Slider::find($req['id']);

        if (!empty($slider) && $req['image'] != $slider['image']) {
            Storage::disk('public')->delete('image', $slider['image']);
            $slider['image']  = $helper->store_base64_image($req['image']);
        }

        $slider->fill($req->only('title', 'subtitle', 'button_text', 'button_link'))->save();

        return redirect(route('slider_show'));
    }
    public function delete($id)
    {
        $delete = Slider::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();

        return redirect(route('slider_show'));
    }
}
