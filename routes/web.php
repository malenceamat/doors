<?php

use App\Http\Controllers\AdminController;
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



    Route::get('/slider',[SliderController::class,'index']);

    Route::get('/admin',[AdminController::class,'index']);


});

Route::get('/', [UserController::class, 'index']);







Route::prefix('/dashboard')->group(function () {
    Route::get('/', [UserController::class, 'index']);
});
require __DIR__ . '/auth.php';







