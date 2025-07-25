<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InfoBlockController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\PayDeliveryController;
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
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::prefix('admin')->group(function () {

        Route::get('/slider/{id?}', [SliderController::class, 'index'])->name('slider');
        Route::post('/slider_create', [SliderController::class, 'create'])->name('slider_create');
        Route::get('/slider_show', [SliderController::class, 'show'])->name('slider_show');
        Route::post('/slider_edit', [SliderController::class, 'update'])->name('slider_edit');
        Route::delete('/slider_delete/{id}', [SliderController::class, 'delete'])->name('delete_slider');

        Route::get('/info_create_update/{id?}', [InfoBlockController::class, 'index'])->name('info_create_update');
        Route::post('/info_create_update', [InfoBlockController::class, 'create'])->name('info_create');
        ROute::get('/info_show', [InfoBlockController::class, 'show'])->name('info_show');
        Route::post('/info_edit', [InfoBlockController::class, 'update'])->name('info_edit');
        Route::delete('/info_delete/{id}', [InfoBlockController::class, 'delete'])->name('delete_info');

        Route::get('/banner', [BannerController::class, 'index'])->name('banner');
        Route::post('/banner_create', [BannerController::class, 'create'])->name('banner_create');

        Route::get('/blog', [BlogController::class, 'index'])->name('blog');
        Route::post('/blog_create', [BlogController::class, 'create'])->name('blog_create');

        Route::get('/pay_delivery_index', [PayDeliveryController::class, 'index'])->name('pay_delivery_index');
        Route::post('/pay_delivery_create', [PayDeliveryController::class,'create'])->name('pay_delivery_create');

        Route::get('/partners/{id?}', [PartnersController::class,'index'])->name('partners');
        Route::post('/partners_create', [PartnersController::class,'create'])->name('partners_create');
        Route::get('/partners_show', [PartnersController::class,'show'])->name('partners_show');
        Route::post('/partners_edit', [PartnersController::class,'update'])->name('partners_edit');
        Route::delete('partners_delete/{id}', [PartnersController::class,'delete'])->name('partners_delete');

        Route::get('/about', [AboutController::class,'index'])->name('about_show');
        Route::post('/about_create', [AboutController::class,'create'])->name('about_create');

        Route::get('/news/{id?}', [NewsController::class,'index'])->name('news_index');
        Route::post('/news_create', [NewsController::class,'create'])->name('news_create');
        Route::get('/news_show', [NewsController::class,'show'])->name('news_show');
        Route::post('/news_edit', [NewsController::class,'update'])->name('news_edit');
        Route::delete('/news_delete/{id}', [NewsController::class,'delete'])->name('news_delete');

        Route::get('/contact_index', [ContactController::class,'index'])->name('contact_index');
        Route::post('/contact_create', [ContactController::class,'create'])->name('contact_create');

        Route::get('/dealer',[AdminController::class,'dealer'])->name('dealer');
        Route::post('/register_dealer',[AdminController::class,'register_dealer'])->name('register_dealer');
    });
});

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/pay_delivery', [UserController::class,'index_pay_delivery'])->name('pay_delivery');
Route::get('/about', [UserController::class,'about_index'])->name('about_index');
Route::get('/news', [UserController::class,'news_index'])->name('news');
Route::get('/news_show/{id}', [UserController::class,'news_index_id'])->name('news_index_id');
Route::get('/contacts', [UserController::class,'contacts_index'])->name('contacts');
Route::get('/catalog', [CatalogController::class,'index'])->name('catalog');
Route::get('/catalog/{name}', [CatalogController::class, 'products_filters_list'])->name('products_filters_list');
Route::get('/catalog/{name}/{sub_name}', [CatalogController::class, 'product'])->name('product_sub_category');
Route::post('/filter', [CatalogController::class,'filter'])->name('filter');
Route::get('/product/{item_id}/{item_name}', [CatalogController::class, 'card_product'])->name('card_product');

Route::middleware(['auth'])->group(function (){
    Route::get('/cabinet' , [CabinetController::class,'account_settings'])->name('account_settings');
    Route::post('/add_favorites',[CabinetController::class,'add_favorites'])->name('add_favorites');
    Route::get('/check-favorites/{itemId}',[CabinetController::class,'checkFavorites']);

    Route::prefix('cabinet')->group(function () {
        Route::get('/favorites' , [CabinetController::class,'favorites'])->name('favorites');
        Route::get('/basket' , [CabinetController::class,'basket'])->name('basket');
        Route::get('/order' , [CabinetController::class,'order'])->name('order');
        Route::get('/feedback' , [CabinetController::class,'feedback'])->name('feedback');
    });
});


require __DIR__ . '/auth.php';
