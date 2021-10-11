<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StartController;
use App\Models\item;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/start', [StartController::class, 'index']);

Route::get('/item/{id}', [ItemController::class, 'index']);

Route::middleware('auth')->group(function () {

    Route::get('/favorite', [FavoriteController::class, 'index']);

    Route::get('/cart', [CartController::class, 'index']);
});

Auth::routes();
