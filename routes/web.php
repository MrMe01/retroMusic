<?php



Route::get('/', function () {
    return view('welcome/landingPage');
});
Auth::routes();

Route::get('/home', function () {
    return view('home/homePrincipalPage');
});


Route::get('/song', function () {
    return view('song/songsPage');
    
});


Route::get('usuarios/profile', function () {
    return view('usuarios/profilePage');
});