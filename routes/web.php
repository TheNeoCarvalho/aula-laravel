<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@show');

Route::prefix('/admin')->group(function(){

    Route::get('/', 'AdminController@index');
    Route::get('/user/create', 'UserController@create');
    Route::post('/user/create', 'UserController@store');
    Route::get('/login', 'AdminController@login')->name('login');
    Route::post('/login', 'AdminController@loginAction');
    Route::get('/logout', 'AdminController@logoutAction');

});

Route::get('/home', 'HomeController@index');

Route::get('/{user}', 'HomeController@show');

