<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/', function () {
//     return view('frontend.pages.home');
// });

//  Route::resource('/product', ProductController::class);



Route::get('/', [ProductController::class, 'productFetch'])->name('home');




Route::get('about', function () {
    return view('frontend.pages.about');
});

Route::get('privacy', function () {
    return view('frontend.pages.privacy');
});

Route::get('contact', function () {
    return view('frontend.pages.contact');
});
