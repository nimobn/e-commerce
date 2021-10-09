<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\ColorController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::resource('/forms/colors', ColorController::class);







Route::get("/tables", function(){
    return view('admin.tables');
});

Route::get("/login", function(){
    return view('admin.login');
});

Route::get("/", function(){
    return view('admin.index');
});

Route::get("/forms", function(){
    return view('admin.forms');
});

Route::get("/elem", function(){
    return view('admin.ui-elements');
});
