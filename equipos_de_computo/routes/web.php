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
Route::get('/',function(){
    return redirect()->to('index');
});

Route::get('index', [\App\Http\Controllers\EquiposController::class, 'index'])->name('index');
Route::get('agregar',[\App\Http\Controllers\EquiposController::class, 'agregar'])->name('agregar');
Route::post('guardar',[\App\Http\Controllers\EquiposController::class, 'guardar'])->name('guardar');
