<?php

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

Route::get('/', function () {
    return view('mainPage');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/pcSelectionVip', function () {
    return view('pcSelectionVip');
});

Route::get('/pcSelection', function () {
    return view('pcSelection');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/scheduleVip', function () {
    return view('scheduleVip');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/authorization', function () {
    return view('authorization');
});
