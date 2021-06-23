<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CalcController;

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

Route::get('/', [MainController::class, 'Main']);

Route::get('/main', [MainController::class, 'Main']);

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::post('/trench', [CalcController::class,'Trench']);
Route::get('/trench', function () {
    return view('trench');
});

Route::post('/pit', [CalcController::class,'Pit']);
Route::get('/pit', function () {
    return view('pit');
});
