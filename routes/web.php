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

Route::get('/', function () {
    return view('index');
});
Route::post('pay',[\App\Http\Controllers\PaymentController::class,'pay'])->name('payment');
Route::get('success',[\App\Http\Controllers\PaymentController::class,'success']);
Route::get('error',[\App\Http\Controllers\PaymentController::class,'error']);

Route::post('find',[\App\Http\Controllers\PaymentController::class,'find'])->name('f');

