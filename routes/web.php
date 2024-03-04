<?php

use App\Http\Controllers\Customercontroller;
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

Route::get('/',[Customercontroller::class,'index']);

Route::post('customer-save',[Customercontroller::class,'save']);

Route::get('list',[Customercontroller::class,'index2']);

Route::get('customer-edit/{id}',[Customercontroller::class,'edit']);

Route::post('customer-update',[Customercontroller::class,'update']);

Route::get('customer-delete/{id}',[Customercontroller::class,'delete']);
