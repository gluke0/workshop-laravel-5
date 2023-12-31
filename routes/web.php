<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\PizzaController;

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


Route::resource('/pizza', PizzaController::class);
Route::resource('/', PizzaController::class);