<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;

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
Route::get('/', [LandingController::class, 'index'])->name('landing');


Route::get("/login", function(){
    return view("app.login");
});


Route::get("/product", function(){
    return view("app.products.product");
});

Route::get("/contact-us", function(){
    return view("app.contact-us");
});

Route::get("/faq", function(){
    return view("app.faq");
});

Route::get("/about-us", function(){
    return view("app.about-us");
});

Route::get("/cart", function(){
    return view("app.cart");
});

Route::get("/shipping", function(){
    return view("app.shipping");
});

Route::get("/payment", function(){
    return view("app.peyment");
});

Route::get("/specials", function(){
    return view("app.products.special");
});

Route::get("/user/info", [UserController::class, 'index'])->name("user.info");
Route::get("/user/orders", [UserController::class, 'orders'])->name("user.orders");
Route::get("/user/address", [UserController::class, 'address'])->name("user.address");
Route::get("/user/address/add", [UserController::class, 'newAddress'])->name("user.newAddress");
Route::get("/user/lists", [UserController::class, 'lists'])->name("user.lists");
Route::get("/user/referal", [UserController::class, 'referal'])->name("user.referal");

Route::get("/admin/tables", function(){
    return view('admin.tables');
});

Route::get("/admin/login", function(){
    return view('admin.login');
});

Route::get("/admin", function(){
    return view('admin.index');
});

Route::get("/admin/forms", function(){
    return view('admin.forms');
});

Route::get("/admin/elem", function(){
    return view('admin.ui-elements');
});