<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/shop', [\App\Http\Controllers\Shop::class, 'index'])->name('shop-index');

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog-index');

//Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'create'])->middleware('guest')->name('login');
//Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->middleware('guest');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('auth')->name('admin.index');
Route::get('/admin/create', [\App\Http\Controllers\AdminController::class, 'create'])->middleware('auth')->name('admin.create');
Route::post('/admin', [\App\Http\Controllers\AdminController::class, 'store'])->middleware('auth')->name('admin.store');
Route::get('/admin/{post}/edit', [\App\Http\Controllers\AdminController::class, 'edit'])->middleware('auth')->name('admin.edit');
Route::put('/admin/{post}', [\App\Http\Controllers\AdminController::class, 'update'])->middleware('auth')->name('admin.update');
Route::delete('/admin/{post}', [\App\Http\Controllers\AdminController::class, 'destroy'])->middleware('auth')->name('admin.destroy');

Route::post('/vixod', [\App\Http\Controllers\AdminController::class, 'vixod'])->middleware('auth')->name('vixod');

Route::get('/admin/shop', [\App\Http\Controllers\ShopController::class, 'index'])->middleware('auth')->name('shop.index');
Route::get('/admin/shop/create', [\App\Http\Controllers\ShopController::class, 'create'])->middleware('auth')->name('shop.create');
Route::post('/admin/shop', [\App\Http\Controllers\ShopController::class, 'store'])->middleware('auth')->name('shop.store');
Route::get('/admin/shop/{post}/edit', [\App\Http\Controllers\ShopController::class, 'edit'])->middleware('auth')->name('shop.edit');
Route::put('/admin/shop/{post}', [\App\Http\Controllers\ShopController::class, 'update'])->middleware('auth')->name('shop.update');
Route::delete('/admin/shop/{post}', [\App\Http\Controllers\ShopController::class, 'destroy'])->middleware('auth')->name('shop.destroy');

