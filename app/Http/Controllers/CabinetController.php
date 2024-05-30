<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\returnValue;

class CabinetController extends Controller
{
    public function favorites()
    {
        $category = Category::with('parent')->get();

        return view('user.personal_cabinet.content.favorites', compact('category'));
    }
    public function basket()
    {
        $category = Category::with('parent')->get();

        return view('user.personal_cabinet.content.basket', compact('category'));
    }
    public function order()
    {
        $category = Category::with('parent')->get();

        return view('user.personal_cabinet.content.order', compact('category'));
    }
    public function feedback()
    {
        $category = Category::with('parent')->get();

        return view('user.personal_cabinet.content.feedback', compact('category'));
    }
    public function account_settings()
    {
        $category = Category::with('parent')->get();

        return view('user.personal_cabinet.content.account_settings', compact('category'));
    }
}
