<?php

use App\Http\Controllers\CountDeliveryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/getCountForFastDelivery', [CountDeliveryController::class, 'countFastDelivery'])->middleware('for_api')->name('getCountForFastDelivery');
Route::get('/getCountForSlowDelivery', [CountDeliveryController::class, 'countSlowDelivery'])->middleware('for_api')->name('getCountForSlowDelivery');

