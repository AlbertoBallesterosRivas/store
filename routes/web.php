<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/product', function () {
    return view('product.index');
})->middleware(['auth'])->name('product');

Route::get('/store', function () {
    return view('store.index');
})->middleware(['auth'])->name('store');

Route::resource('product', ProductController::class);

Route::resource('store', StoreController::class);

require __DIR__.'/auth.php';
