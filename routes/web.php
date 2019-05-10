<?php

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
    return view('pages/home');
});

Route::get('/manual', function () {
    return view('pages/manual');
})->name('manual');
Route::get('/manual/devices', function () {
    return view('pages/manual/devices');
})->name('manual.devices');
Route::get('/manual/helpers', function () {
    return view('pages/manual/helpers');
})->name('manual.helpers');
Route::get('/manual/objects', function () {
    return view('pages/manual/objects');
})->name('manual.objects');
Route::get('/manual/hooks', function () {
    return view('pages/manual/hooks');
})->name('manual.hooks');
