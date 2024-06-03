<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Favorites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\returnValue;

class CabinetController extends Controller
{
    public function checkFavorites($itemId)
    {
        $user = auth()->user(); // Получаем авторизованного пользователя

        if ($user) {
            $isFavorite = $user->favorites()->where('item_id', $itemId)->exists(); // Проверяем, есть ли товар в избранном
            return response()->json(['is_favorite' => $isFavorite]);
        } else {
            return response()->json(['error' => 'Не авторизован']);
        }
    }
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
