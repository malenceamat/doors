<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\InfoBlockRequest;
use App\Models\Info_Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfoBlockController extends Controller
{
    public function index($id = null)
    {
        $info = $id ? Info_Block::find($id) : new Info_Block;
        return view('admin.content.info_block.info_create_update',compact('info'));
    }
    public function create(InfoBlockRequest $req)
    {
        $helper = new BaseHelperController();
        Info_Block::create(array_merge($req->all(),['image' => $helper->store_base64_image($req['image'])]) );
        return redirect()->route('info_show');
    }
    public function show()
    {
        $info = Info_Block::get();
        return view('admin.content.info_block.info_show',compact('info'));
    }
    public function update(Request $req)
    {
        $helper = new BaseHelperController();
        $info = Info_Block::find($req['id']);
        if (!empty($info) && $req['image'] != $info['image']) {
            Storage::disk('public')->delete('image', $info['image']);
            $info['image']  = $helper->store_base64_image($req['image']);
        }
        $info->fill($req->only('title', 'subtitle'))->save();
        return redirect()->route('info_show');
    }
}
