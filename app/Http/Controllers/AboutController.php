<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::firstORCreate();

        return view('admin.content.about.about',compact('about'));
    }
    public function create(AboutRequest $req)
    {
        $helper = new BaseHelperController();

        $about = About::first();

        if (!empty($about) && $req['image'] != $about['image']) {
            Storage::disk('public')->delete('image', $about['image']);
            $about['image']  = $helper->store_base64_image($req['image']);
        }

        $about->text = $req['text'];
        $about->save();

        return redirect()->route('about_show');
    }
}
