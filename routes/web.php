<?php

use Illuminate\Support\Facades\Route; //importando a classe Route

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
    return view('pages.index'); //View ele ja sabe que é a pasta view
});

Route::get('/reviews', function () {
    return view('pages.reviews');
});

Route::get('/oqueassistir', function () {
    return view('pages.oqueassistir');
});