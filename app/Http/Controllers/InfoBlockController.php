<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Models\Info_Block;
use App\Models\Slider;
use Illuminate\Http\Request;

class InfoBlockController extends Controller
{
    public function index()
    {
        return view('admin.content.info_block.info_create_update');
    }
    public function create(Request $req)
    {
        $helper = new BaseHelperController();
        Info_Block::create(array_merge($req->all(),['image' => $helper->store_base64_image($req['image'])]) );
        return redirect()->route('info_show');
    }
    public function show()
    {
        return view('admin.content.info_block.info_show');
    }
}
🤑
