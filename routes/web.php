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
    return view('home');
});

Route::post('calculo','ControladorCalculo@calculoInput');

Route::post('comprobar','ControladorCalculo@comprobar');


Route::get('correcto', function () {
    return view('divisorCorrecto')->name('correcto');
});

Route::get('/incorrecto', function () {
    return view('divisorIncorrecto')->name('incorrecto');
});