<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\App\Http\Controllers\CartController;
use Modules\Shop\App\Http\Controllers\FavoriteController;
use Modules\Shop\App\Http\Controllers\ProductController;
use Modules\Shop\App\Http\Controllers\OrderController;

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

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/category/{categorySlug}', [ProductController::class, 'category'])->name('products.category');

Route::get('/tag/{tagSlug}', [ProductController::class, 'tag'])->name('products.tag');

Route::get('/{categorySlug}/{productSlug}', [ProductController::class, 'show'])->name('products.show');


Route::middleware(['auth'])->group(function(){
    //carts
    Route::get('/carts', [CartController::class, 'index'])->name('carts.index');
    Route::post('/carts', [CartController::class, 'store'])->name('carts.store');
    Route::get('/carts/{id}/remove', [CartController::class, 'destroy'])->name('carts.destroy');
    Route::put('/carts', [CartController::class, 'update'])->name('carts.update');
    
    //favorite
    Route::post('/favorites', [FavoriteController::class, 'addFavorite'])->name('favorites.store');
    Route::get('/favorites/{id}/remove', [FavoriteController::class, 'deleteFav'])->name('favorites.destroy');
    Route::get('/favorites/empty', [FavoriteController::class, 'emptyFav'])->name('emptyFav');
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');

    //orders
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

});



Route::get('/{categorySlug}/{productSlug}', [ProductController::class, 'show'])->name('products.show');
