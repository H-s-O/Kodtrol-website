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
    return view('pages/manual/introduction');
})->name('manual');
Route::get('/manual/interface/project-configuration', function () {
    return view('pages/manual/project_config');
})->name('manual.interface.project_config');
Route::get('/manual/interface/console-window', function () {
    return view('pages/manual/console_window');
})->name('manual.interface.console_window');
Route::get('/manual/interface/devices', function () {
    return view('pages/manual/devices');
})->name('manual.interface.devices');
Route::get('/manual/interface/scripts', function () {
    return view('pages/manual/scripts');
})->name('manual.interface.scripts');
Route::get('/manual/interface/scripts/editor', function () {
    return view('pages/manual/scripts_editor');
})->name('manual.interface.scripts.editor');
Route::get('/manual/interface/medias', function () {
    return view('pages/manual/medias');
})->name('manual.interface.medias');
Route::get('/manual/interface/timelines', function () {
    return view('pages/manual/timelines');
})->name('manual.interface.timelines');
Route::get('/manual/interface/timelines/editor', function () {
    return view('pages/manual/timelines_editor');
})->name('manual.interface.timelines.editor');
Route::get('/manual/interface/boards', function () {
    return view('pages/manual/boards');
})->name('manual.interface.boards');
Route::get('/manual/interface/boards/editor', function () {
    return view('pages/manual/boards_editor');
})->name('manual.interface.boards.editor');
Route::get('/manual/scripting/helpers', function () {
    return view('pages/manual/helpers');
})->name('manual.scripting.helpers');
Route::get('/manual/scripting/objects', function () {
    return view('pages/manual/objects');
})->name('manual.scripting.objects');
Route::get('/manual/scripting/hooks', function () {
    return view('pages/manual/hooks');
})->name('manual.scripting.hooks');
