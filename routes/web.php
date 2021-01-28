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
Route::get('/login', [App\Http\Controllers\AuthMercadoLibreController::class, 'showLoginForm'])->name('login');
Route::get('/checkauth', [App\Http\Controllers\AuthMercadoLibreController::class, 'checkauth'])->name('checkauth');

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('mercadolibre.home')->middleware(['authML']);

Route::get('/product-list', [App\Http\Controllers\ProductsController::class, 'productList'])->name('productList')->middleware(['authML']);
