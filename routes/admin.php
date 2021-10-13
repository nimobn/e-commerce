<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LandingController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\FeatureController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::get('/forms/colors', [ColorController::class, 'index'])->name('colors');


Route::prefix('features')->name("features.")->group(function () {
    Route::get('', [FeatureController::class, 'index'])->name('list');
    Route::get('create', [FeatureController::class, 'create'])->name('create');
    Route::post('create', [FeatureController::class, "store"])->name("store");
    Route::get('edit/{feature}', [FeatureController::class, "edit"])->name("edit");
    Route::patch('edit/{feature}', [FeatureController::class, "update"])->name("update");
    Route::delete('destroy/{feature}', [FeatureController::class, "destroy"])->name("destroy");
    Route::delete('destroy/item/{feature}/{item}', [FeatureController::class, "destroyItem"])->name("destroy.item");
});






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
