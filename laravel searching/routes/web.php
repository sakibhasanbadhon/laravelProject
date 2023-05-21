<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Models\People;
use Symfony\Component\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/people', [SearchController::class, 'index']);

Route::get('/people/simple', [SearchController::class, 'simple'])->name('simple_search');
Route::get('/people/advance', [SearchController::class, 'advance'])->name('advance_search');


