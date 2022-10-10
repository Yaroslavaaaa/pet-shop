<?php

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

Route::get('/', [\App\Http\Controllers\productController::class, 'index'])->name('index');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'products'])->name('products');
Route::get('/products/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('create');
Route::post('/products/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::get('/products/{product}', [\App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::get('/products/{product}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('edit');
Route::post('/products/{product}/edit/save', [\App\Http\Controllers\ProductController::class, 'editSave'])->name('editSave');
Route::get('/products/{product}/delete', [\App\Http\Controllers\ProductController::class, 'delete'])->name('delete');

Route::get('/user',[\App\Http\Controllers\AuthController::class, 'user'])->name('user');


Route::group(['prefix' => 'auth'], function(){
    Route::get('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::get('login', [\App\Http\Controllers\AuthController::class, 'auth'])->name('auth');
    Route::post('user/create', [\App\Http\Controllers\AuthController::class, 'create'])->name('user.create');
    Route::post('signin', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});
