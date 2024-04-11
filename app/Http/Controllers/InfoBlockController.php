<?php

namespace App\Http\Controllers;

use App\Models\Info_Block;
use Illuminate\Http\Request;

class InfoBlockController extends Controller
{
    public function index()
    {
        return view('admin.content.info_block.info_create_update');
    }
    public function create(Request $req)
    {
        dd($req->all());
        Info_Block::create($req->all());
        return redirect()->route('admin.content.info_block.info_create');
    }
    public function show()
    {
        return view('admin.content.info_block.info_show');
    }
}
