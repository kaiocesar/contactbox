<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');

Route::get('/callback/{provider}', 'SocialController@callback');
