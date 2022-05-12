<?php

use App\Http\Controllers\ProductsController;
use App\Models\products;
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
Route::get('/',  [ProductsController::class,'index'] );
Route::get('/Product/create',[ProductsController::class,'create']);
Route::post('/Product/store',[ProductsController::class,'store']);
Route::get('/Product/show/{id}',[ProductsController::class,'show']);

Route::get('/destroy/{id}', [ProductsController::class,'destroy']);
Route::post('/edit/{id}', [ProductsController::class,'update']);
Route::get('/edit/{id}', [ProductsController::class,'edit']);