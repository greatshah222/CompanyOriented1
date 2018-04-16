<?php
Route::get('/','FrontController@index')->name('home');

Route::get('/menu','FrontController@menu')->name('menu');

Route::get('/logout', 'Auth\LoginController@logout')->name('home');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

