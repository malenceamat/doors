<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InfoBlockController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin',[AdminController::class,'index']);

    Route::prefix('admin')->group(function () {

        Route::get('/slider/{id?}',[SliderController::class,'index'])->name('slider');
        Route::post('/slider_create',[SliderController::class,'create'])->name('slider_create');
        Route::get('/slider_show',[SliderController::class,'show'])->name('slider_show');
        Route::post('/slider_edit',[SliderController::class,'update'])->name('slider_edit');
        Route::delete('/slider_delete/{id}',[SliderController::class,'delete'])->name('delete_slider');

        Route::get('/info_create_update/{id?}',[InfoBlockController::class,'index'])->name('info_create_update');
        Route::post('/info_create_update',[InfoBlockController::class,'create'])->name('info_create');
        ROute::get('/info_show',[InfoBlockController::class,'show'])->name('info_show');
        Route::post('/info_edit',[InfoBlockController::class,'update'])->name('info_edit');
        Route::delete('/info_delete/{id}',[InfoBlockController::class,'delete'])->name('delete_info');

        Route::get('/banner',[BannerController::class,'index'])->name('banner');
        Route::post('/banner_create',[BannerController::class,'create'])->name('banner_create');

        Route::get('/blog',[BlogController::class,'index'])->name('blog');
        Route::post('/blog_create',[BlogController::class,'create'])->name('blog_create');



    });


});

Route::get('/', [UserController::class, 'index'])->name('home');







Route::prefix('/dashboard')->group(function () {
    Route::get('/', [UserController::class, 'index']);
});
require __DIR__ . '/auth.php';







