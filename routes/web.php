<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
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
Route::get('/signup',[HomeController::class,'signup'])->name('signup');
Route::get('/login',[HomeController::class,'login'])->name('login');

Route::group(['prefix' => '/'],function(){
    Route::get('/',[HomeController::class,'index'])->name('index');
    Route::get('/blog',[HomeController::class,'blog'])->name('blog');
    Route::get('/blog/detail',[HomeController::class,'blog-detail'])->name('blog-detail');
    Route::get('/cart',[HomeController::class,'cart'])->name('cart');
    Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
    Route::get('/wishlist',[HomeController::class,'wishlist'])->name('wishlist');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
});
Route::group(['prefix'=>'/shop'],function(){
    Route::get('/',[ShopController::class,'shop'])->name('shop');
    Route::get('/product',[ShopController::class,'product'])->name('product');
});