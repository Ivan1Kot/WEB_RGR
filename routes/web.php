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
    return view('main');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/trench', function () {
    return view('trench');
});

Route::get('/pit', function () {
    return view('pit');
});

Route::get('/planning', function () {
    return view('planning');
});

Route::get('/terracing', function () {
    return view('terracing');
});

Route::get('/hydrohammer', function () {
    return view('hydrohammer');
});

Route::get('/hydrodrill', function () {
    return view('hydrodrill');
});

Route::get('/foundation_pit', function () {
    return view('foundation_pit');
});

Route::get('/price', function () {
    return view('price');
});
