<?php

use App\Http\Controllers\CountDeliveryController;
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

Route::prefix('api')->group(function () {
    Route::get('/getCountForFastDelivery', [CountDeliveryController::class, 'countFastDelivery'])->middleware('for_api')->name('getCountForFastDelivery');
    Route::get('/getCountForSlowDelivery', [CountDeliveryController::class, 'countSlowDelivery'])->middleware('for_api')->name('getCountForSlowDelivery');
});
