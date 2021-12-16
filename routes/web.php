<?php

use App\Http\Controllers\HomeController;
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
Route::view('/','front.home')->name('home');
Route::view('/product','front.product')->name('product');
Route::view('/product-detail','front.product-detail')->name('product-detail');
Route::view('/shoping-cart','front.shoping-cart')->name('shoping-cart');
Route::view('/contact','front.contact')->name('contact');
Route::view('/about','front.about')->name('about');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
