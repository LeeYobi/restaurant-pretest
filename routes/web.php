<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\IngredientController;

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

Route::get('category/create', [CategoryController::class, 'create']);
Route::resource('category', CategoryController::class);

Route::get('food/create', [FoodController::class, 'create']);
Route::resource('food', FoodController::class);

Auth::routes(['register' => false]); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'FoodController@listFood');

Route::get('ingredient/create', [IngredientController::class, 'create']);
Route::resource('ingredient', IngredientController::class);
