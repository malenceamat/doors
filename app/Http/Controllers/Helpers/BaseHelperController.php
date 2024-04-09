<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class BaseHelperController extends Controller
{
    public function store_base64_image($req)
    {
        $image = preg_replace('#^data:image/\w+;base64,#i', '', $req);
        $image = str_replace(' ', '+', $image);
        $fileName = "image/" . Str::random(20) . '.png';

        Storage::disk('public')->put($fileName, base64_decode($image));
        return $fileName;
    }
}


