<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index($id = null)
    {
        $news = $id ? News::find($id) : new News;
        $check_role = Auth::user();

        return view('admin.content.news.news_create',compact('news','check_role'));
    }
    public function create(NewsRequest $req)
    {
        $helper = new BaseHelperController();

        News::create(array_merge($req->all(),['image' => $helper->store_base64_image($req['image'])]) );

        return redirect()->route('news_show');
    }
    public function show()
    {
        $news = News::orderBy('created_at')->get();
        $check_role = Auth::user();

        return view('admin.content.news.news_show',compact('news','check_role'));
    }
    public function update(NewsRequest $req)
    {
        $helper = new BaseHelperController();

        $news = News::find($req['id']);

        if (!empty($news) && $req['image'] != $news['image']) {
            Storage::disk('public')->delete('image', $news['image']);
            $news['image']  = $helper->store_base64_image($req['image']);
        }

        $news->fill($req->only('title', 'text'))->save();

        return redirect()->route('news_show');
    }
    public function delete($id)
    {
        $delete = News::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();

        return redirect()->route('news_show');
    }
}
