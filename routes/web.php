<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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

Route::get("/specials", function(){
    return view("app.products.special");
});
