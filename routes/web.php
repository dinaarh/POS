<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
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
//Home Page
Route::get('/', function () {
    return view('home-page');
});

//Product Page
// Route::prefix('category')->group(function() {
//     Route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
//     Route::get('/beauty-health', [ProductsController::class, 'beautyHealth']);
//     Route::get('/home-care', [ProductsController::class, 'homeCare']);
//     Route::get('/baby-kid', [ProductsController::class, 'babyKid']);
// });
Route::prefix('category')->group(function () {
    Route::get('/', [ProductsController::class, 'showCategories']); 
    Route::get('{category}', [ProductsController::class, 'showCategory']); 
});

//User Page
Route::get('user/{id}/name/{name}', [UserController::class, 'profile']);;

//Sales Page
Route::get('/sales', [SalesController::class, 'index']);