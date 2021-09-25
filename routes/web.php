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

Route::get('/nl', function () {
    return view('dutch.index');
});

Route::get('/nl/about', function () {
    return view('dutch.about');
});

Route::get('/nl/projects', function () {
    return view('dutch.projects');
});

Route::get('/fix', function () {
    return view('fix');
});

Route::get('/row', [\App\Http\Controllers\RowController::class, 'rowItems']);

Route::get('/test', [\App\Http\Controllers\DayController::class, 'day']);
