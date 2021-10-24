<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LandingController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\FeatureController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubcategoryController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::resource('/forms/colors', ColorController::class);

Route::delete('features/destroy/item/{feature}/{item}', [FeatureController::class, "destroyItem"])->name("features.destroy.item");
Route::resource('features', FeatureController::class);

Route::resource('/categories', CategoryController::class);
Route::post('/categories/sub/{category}' , [CategoryController::class , 'subCategory'])->name('categories.sub');
Route::post('/categories/sub/sub/{path}' , [SubcategoryController::class , 'store'])->name('categories.sub.sub');
Route::delete('/categories/sub/sub/{category}' , [SubcategoryController::class , 'destroy'])->name('categories.sub.sub.destroy');
Route::patch('/categories/subcategory/{category}' , [SubcategoryController::class , 'updateSubCategory'])->name('categories.subcategory.update');
Route::patch('/categories/subcategory/subcategory/{category}' , [SubcategoryController::class , 'updateSubSubCategory'])->name('categories.subcategory.subcategory.update');
// Route::prefix('features')->name("features.")->group(function () {
//     Route::get('', [FeatureController::class, 'index'])->name('list');
//     Route::get('create', [FeatureController::class, 'create'])->name('create');
//     Route::post('', [FeatureController::class, "store"])->name("store");
//     Route::get('{feature}/edit', [FeatureController::class, "edit"])->name("edit");
//     Route::patch('{feature}', [FeatureController::class, "update"])->name("update");
//     Route::delete('{feature}', [FeatureController::class, "destroy"])->name("destroy");
//     Route::delete('destroy/item/{feature}/{item}', [FeatureController::class, "destroyItem"])->name("destroy.item");
// });






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
