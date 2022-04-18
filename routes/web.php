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

Route::get('/', [\App\Http\Controllers\InfoController::class, 'showData']);

Route::get('/fix', function () {
    return view('fix');
});

// Controller routes

Route::get('/row', [\App\Http\Controllers\RowController::class, 'rowItems']);

Route::get('/test', [\App\Http\Controllers\DayController::class, 'day']);
Route::get('/testt', [\App\Http\Controllers\BtcController::class, 'showData']);

Route::get('/form', [\App\Http\Controllers\FormController::class, 'index']);
Route::post('/form', [\App\Http\Controllers\FormController::class, 'store']);

Route::get('/tafel', [\App\Http\Controllers\TafelController::class, 'index']);
Route::post('/tafel', [\App\Http\Controllers\TafelController::class, 'store']);

Route::get('/btw', [\App\Http\Controllers\BtwController::class, 'index']);
Route::post('/btw', [\App\Http\Controllers\BtwController::class, 'store']);