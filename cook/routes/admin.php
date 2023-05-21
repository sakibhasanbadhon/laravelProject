<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;


//Auth::routes();



Route::get('logout', [LoginController::class,'logout']);


Route::get('/backend-admin', function () {
    return view('backend.pages.home');
})->middleware('auth');

Route::get('chart', function () {
    return view('backend.pages.chart');
})->middleware('auth');

Route::get('table', function(){
    return view('backend.pages.table');
})->middleware('auth');



// Route::resource('category', CategoryController::class);



Route::middleware(['auth'])->group(function () {
    Route::group(['prefix'=>'category','as'=>'category.'], function(){
        Route::get('/',[CategoryController::class, 'index'])->name('index');
        Route::get('create',[CategoryController::class, 'create'])->name('create');
        Route::post('store',[CategoryController::class, 'store'])->name('store');
        Route::get('{id}/edit',[CategoryController::class, 'edit'])->name('edit');
        Route::put('{id}/update',[CategoryController::class, 'update'])->name('update');
        Route::delete('{id}/delete',[CategoryController::class, 'delete'])->name('delete');

    });
});

// all product curt route
Route::resource('product', ProductController::class);











?>
