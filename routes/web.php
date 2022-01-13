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
Route::view('test','test');
Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa','/home')->name('anasayfa');

Route::get('/',function (){
    return view('HomeScreen.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])-> where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');;


//Admin
//Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome')->middleware('auth');



//Admin
Route::middleware(['auth'])->prefix('admin')->group(function(){

    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');
    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add',[App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create',[App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show',[App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


    //Product
    Route::prefix('product')->group(function(){

    Route::get('/',[App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
    Route::get('/create',[App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
    Route::post('/store',[App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
    Route::get('/edit/{id}',[App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
    Route::post('/update/{id}',[App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
    Route::get('/delete/{id}',[App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
    Route::get('/show',[App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
    });

});

//Admin Login
Route::get('/admin/login',[HomeController::class, 'login'])->name('login');
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('admin/logout',[HomeController::class,'logout'])->name('logout');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');

})->name('dashboard');
