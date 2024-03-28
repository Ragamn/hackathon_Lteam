<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeatController;
use Illuminate\Support\Facades\Auth;
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

Route::controller(productController::class)->group(function () {
    Route::get('/order', 'index');
    Route::post('/order', 'addCart');
    Route::get('/show/cart', 'showCart');
});

Route::controller(SeatController::class)->group(function () {
    Route::get('/seat', 'index');
    Route::get('/seat/register','add_session');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category');