<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::firstOrCreate();

        return view('admin.content.blog.blog_create', compact('blog'));
    }
    public function create(BlogRequest $req)
    {
        $helper = new BaseHelperController();

        $blog = Blog::first();

        if (!empty($blog) && $req['image'] != $blog['image']) {
            Storage::disk('public')->delete('image', $blog['image']);
            $blog['image']  = $helper->store_base64_image($req['image']);
        }

        $blog->fill($req->only('title', 'subtitle'))->save();

        return redirect()->route('blog');
    }
}
