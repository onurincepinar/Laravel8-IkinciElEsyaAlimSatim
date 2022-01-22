<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
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

Route::view('test', 'HomeScreen.test');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/asked_questions', [HomeController::class, 'asked_questions'])->name('asked_questions');
Route::get('/fag', [HomeController::class, 'fag'])->name('fag');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/product_category/{id}/{slug}', [HomeController::class, 'product_category'])->name('product_category');
Route::post('/getproduct', [HomeController::class, 'getproduct'])->name('getproduct');




//Admin
//Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome')->middleware('auth');

Route::get('/product_detail/{id}', [HomeController::class, 'product_detail'])->name('product_detail');
Route::get('/category/{category_id?}', [ProductController::class, 'category'])->name('category');
//Admin

Route::middleware(['auth'])->prefix('user')->name('user')->group(function (){
    Route::get('shopping_cart', [App\Http\Controller\User\HomeController::class,'index'])->name('shopping_cart');
});

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {

    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');


    Route::prefix('review')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'reviews'])->name('reviews');
        Route::get('/status/{id}/action/{status}', [App\Http\Controllers\Admin\HomeController::class, 'status'])->name('status');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\HomeController::class, 'delete'])->name('review_delete');
    });

    Route::prefix('users')->group(function(){
        Route::get('/',[App\http\controllers\admin\UserController::class,'index'])->name('index');
        Route::get('/delete/{id}',[App\http\controllers\admin\UserController::class,'delete'])->name('delete');
        Route::get('/edit/{id}',[App\http\controllers\admin\UserController::class,'edit'])->name('user_edit');
        Route::get('/add_role/{user_id}/{role_id}',[App\Http\Controllers\Admin\UserController::class,'add_role'])->name('add_role');
        Route::get('/delete_role/{user_id}/{role_id}',[App\Http\Controllers\Admin\UserController::class,'delete_role'])->name('delete_role');
    });

    //Category Routes
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


    //Product Routes
    Route::prefix('product')->group(function () {

        Route::get('/', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
        Route::get('/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
        Route::post('/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
        Route::get('/show', [App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
    });

    //Faqs
    Route::prefix('faq')->group(function () {

        Route::get('/', [App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('/create', [App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('/store', [App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('/show', [App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');
    });

    //Messages
    Route::prefix('messages')->group(function () {

        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::get('/edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('/update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('/delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('/show', [MessageController::class, 'show'])->name('admin_message_show');
    });

    //Image Gallery Routes
    Route::prefix('image')->group(function () {

        Route::get('/create/{product_id}', [App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('/store/{product_id}', [App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('/delete/{id}/{product_id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('/show', [App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });


    //Settings Routes
        Route::prefix('setting')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
    });
});


Route::middleware(['auth'])->prefix('user')->namespace('user')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('userprofile');
});

//User Login
Route::post('/user/logincheck/{role}', [HomeController::class, 'logincheck'])->name('user_logincheck');
Route::view('userLogin', 'HomeScreen.login');
Route::get('/userLogout/{role}', [HomeController::class, 'logout'])->name('userLogout');


//Admin Login

Route::get('/admin/login', [HomeController::class, 'login'])->name('login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('myaccount');
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/products', [UserController::class, 'products'])->name('myproducts')->middleware('seller');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/product_add', [UserController::class, 'product_add'])->name('product_add')->middleware('seller');
    Route::post('/product_add_store', [UserController::class, 'product_store'])->name('seller_product_store')->middleware('seller');
    Route::get('/image_add/{id}', [UserController::class, 'image_add'])->name('image_add')->middleware('seller');
    Route::get('/orders_product', [UserController::class, 'orders_product'])->name('orders_product');
    Route::get('/destroymyreview/{id}', [ReviewController::class, 'destroymyreview'])->name('user_review_delete');
    Route::get('/addtocart/{id?}', [HomeController::class, 'addtocart'])->name('addtocart');
    Route::get('/shopping_cart', [HomeController::class, 'shopping_cart'])->name('shopping_cart');
    Route::post('/checkout',[HomeController::class,'checkout'])->name('checkout');
});
