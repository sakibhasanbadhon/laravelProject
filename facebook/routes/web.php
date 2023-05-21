<?php

use App\Models\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('home');
});


Route::post('store',[HomeController::class, 'store'])->name('store');

Route::get('contact', function () {
    return view('contact');
});



Route::get('about', function () {
    return view('about');
});


Route::get('watch', function () {
    $home = Home::orderBy('id','DESC')->get();
    return view('watch',['home_val'=>$home]);
});
