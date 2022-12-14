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
    flash('success')->success();
    flash('Message important')->important();
    return view('welcome');
})->name('1');

Route::get('/2', function () {
    return view('welcome2');
})->name('2');

Route::get('/3', function () {
    return view('welcome3');
})->name('3');

Route::get('/4', function () {
    return view('welcome4');
})->name('4');
