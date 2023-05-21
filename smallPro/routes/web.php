<?php

use App\Http\Controllers\demoController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('info', [demoController::class, 'index'])->name('index');

Route::get('info/create', [demoController::class, 'create'])->name('info.create');

Route::post('info/store',[demoController::class, 'store'])->name('info/store');


Route::get('student',function(){
    $student = User::find(3);
    return $student->phone;
});
