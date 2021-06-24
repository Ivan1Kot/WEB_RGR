<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CalcController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\DBController;

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

Route::get('/reviews', [ReviewsController::class, 'Reviews']);

Route::post('/trench', [CalcController::class,'Trench']);
Route::get('/trench', function () {
    return view('trench');
});

Route::post('/pit', [CalcController::class,'Pit']);
Route::get('/pit', function () {
    return view('pit');
});

Route::post('/planning', [CalcController::class,'Planning']);
Route::get('/planning', function () {
    return view('planning');
});

Route::post('/terracing', [CalcController::class,'Terracing']);
Route::get('/terracing', function () {
    return view('terracing');
});

Route::post('/hydrodrill', [CalcController::class,'Hydrodrill']);
Route::get('/hydrodrill', function () {
    return view('hydrodrill');
});

Route::post('/foundation_pit', [CalcController::class,'FoundationPit']);
Route::get('/foundation_pit', function () {
    return view('foundation_pit');
});

Route::get('/hydrohammer', function () {
    return view('hydrohammer');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/logout',[DBController::class,'Logout']);

Route::post('/login', [DBController::class,'CreateUser']);
Route::get('/login', function () {
    return view('login', ['login' => 0]);
});

Route::post('/signin', [DBController::class,'Signin']);
Route::get('/signin', function () {
    return view('signin');
});
