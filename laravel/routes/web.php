<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;

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
Route::get('/category', function () {
    return view('category');
});

Route::get('/all', [ItemsController::class, 'allItem']);
Route::get('/category/{id}', [CategoryController::class, 'index']);
Route::get('/item/{id}', [ItemsController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/add-to-cart', [CartController::class, 'store']);
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.delete');
Route::delete('/cartAll/{id}', [CartController::class, 'destroyAll'])->name('cart.deleteAll');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/category', function () {
//     return view('home');
// });
// Route::middleware(['auth:sanctum', 'verified'])->get('/cart', function () {
//     return view('home');
// });
