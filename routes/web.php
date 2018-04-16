<?php
Route::get('/','FrontController@index')->name('home');

Route::get('/menu','FrontController@menu')->name('menu');
