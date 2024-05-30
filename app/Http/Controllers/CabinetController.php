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
        $check_role = Auth::user();
        $category = Category::with('parent')->get();

        return view('user.personal_cabinet.content.favorites', compact('check_role','category'));
    }
    public function basket()
    {
        $check_role = Auth::user();
        $category = Category::with('parent')->get();

        return view('user.personal_cabinet.content.basket', compact('check_role','category'));
    }
    public function order()
    {
        $check_role = Auth::user();
        $category = Category::with('parent')->get();

        return view('user.personal_cabinet.content.order', compact('check_role','category'));
    }
    public function feedback()
    {
        $check_role = Auth::user();
        $category = Category::with('parent')->get();

        return view('user.personal_cabinet.content.feedback', compact('check_role','category'));
    }
    public function account_settings()
    {
        $check_role = Auth::user();
        $category = Category::with('parent')->get();

        return view('user.personal_cabinet.content.account_settings', compact('check_role','category'));
    }
}
