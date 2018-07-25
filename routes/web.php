<?php



Route::get('/','WelcomeController@index');
Auth::routes();

Route::get('/home','HomeController@index');

Route::resource('/song','SongController');
Route::resource('/profile', 'ArtistController');