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
    return view('welcome');
});
Route::get('/', function () {
    return view('equipos_de_computo');
});
Route::get('/', function () {
    return view('all_in_one');
});
Route::get('/', function () {
    return view('desktop');
});
Route::get('/', function () {
    return view('laptop');
});
