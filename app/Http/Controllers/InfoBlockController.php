<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\InfoBlockRequest;
use App\Models\InfoBlock;
use Illuminate\Support\Facades\Storage;

class InfoBlockController extends Controller
{
    public function index($id = null)
    {
        $info = $id ? InfoBlock::find($id) : new InfoBlock;

        return view('admin.content.info_block.info_create_update',compact('info'));
    }
    public function create(InfoBlockRequest $req)
    {
        $helper = new BaseHelperController();

        InfoBlock::create(array_merge($req->all(),['image' => $helper->store_base64_image($req['image'])]) );

        return redirect()->route('info_show');
    }
    public function show()
    {
        $info = InfoBlock::get();

        return view('admin.content.info_block.info_show',compact('info'));
    }
    public function update(InfoBlockRequest $req)
    {
        $helper = new BaseHelperController();

        $info = InfoBlock::find($req['id']);

        if (!empty($info) && $req['image'] != $info['image']) {
            Storage::disk('public')->delete('image', $info['image']);
            $info['image']  = $helper->store_base64_image($req['image']);
        }

        $info->fill($req->only('title', 'subtitle'))->save();

        return redirect()->route('info_show');
    }
    public function delete($id)
    {
        $delete = InfoBlock::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();

        return redirect()->route('info_show');
    }
}
