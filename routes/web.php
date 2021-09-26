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

Route::get("/specials", function(){
    return view("app.products.special");
});

Route::get("/user/info", [UserController::class, 'index'])->name("user.info");