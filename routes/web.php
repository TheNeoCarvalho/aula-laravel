<?php

use Illuminate\Support\Facades\Route;
// rota /
Route::get('/', function () {
    return view('welcome');
});
//rota home

Route::get('/home', 'HomeController@index');

Route::post('/home', 'HomeController@store');

