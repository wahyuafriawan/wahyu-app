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

Route::get('/0006home', function () {
    return view('0006home');
});
Route::get('/0006contact', function () {
    return view('0006contact');
});
Route::get('/0006artikel', function () {
    return view('0006artikel');
});