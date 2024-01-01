<?php
use App\Http\Controllers\myController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImobiliariaController;

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
    return view('welcome');
});

//Route::resource('imobiliarias', ImobiliariaController::class);
//Route::get('/', [ImobiliariaController::class, 'create'])->name('imobiliarias.create');
//Route::delete('/imobiliarias/{id}', [ImobiliariaController::class, 'destroy'])->name('imobiliarias.destroy');
//Route::get('/imobiliarias/{id}/edit', [ImobiliariaController::class, 'edit'])->name('imobiliarias.edit');
//Route::put('/imobiliarias/{id}', [ImobiliariaController::class, 'update'])->name('imobiliarias.update');
//Route::get('/imobiliarias/max-price-house', 'ImobiliariaController@getMaxPriceHouse')->name('imobiliarias.getMaxPriceHouse');

// routes/web.php

Route::get('/imobiliarias', [ImobiliariaController::class, 'index'])->name('imobiliarias.index');
Route::get('/imobiliarias/create', [ImobiliariaController::class, 'create'])->name('imobiliarias.create');
Route::post('/imobiliarias', [ImobiliariaController::class, 'store'])->name('imobiliarias.store');
Route::get('/imobiliarias/{imobiliaria}/edit', [ImobiliariaController::class, 'edit'])->name('imobiliarias.edit');
Route::put('/imobiliarias/{imobiliaria}', [ImobiliariaController::class, 'update'])->name('imobiliarias.update');
Route::delete('/imobiliarias/{imobiliaria}', [ImobiliariaController::class, 'destroy'])->name('imobiliarias.destroy');
Route::get('/imobiliarias/max-price-house', [ImobiliariaController::class, 'getMaxPriceHouse'])->name('imobiliarias.getMaxPriceHouse');
