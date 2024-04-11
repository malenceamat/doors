<?php

use App\Http\Controllers\AdminController;
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

    Route::get('/slider/{id?}',[SliderController::class,'index'])->name('slider');
    Route::get('/admin',[AdminController::class,'index']);
    Route::post('/slider_create',[SliderController::class,'create'])->name('slider_create');
    Route::get('/slider_show',[SliderController::class,'show'])->name('slider_show');
    Route::post('/slider_edit',[SliderController::class,'update'])->name('slider_edit');

    Route::get('/info_create_update',[InfoBlockController::class,'index'])->name('info_create_update');
    Route::post('/info_create_update',[InfoBlockController::class,'create'])->name('info_create');
    ROute::get('/info_show',[InfoBlockController::class,'show'])->name('info_show');
});

Route::get('/', [UserController::class, 'index'])->name('home');







Route::prefix('/dashboard')->group(function () {
    Route::get('/', [UserController::class, 'index']);
});
require __DIR__ . '/auth.php';







