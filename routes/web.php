<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return 'home';
});

Route::get('/About', function () {
    return 'About';
});

Route::get('/Help', function () {
    return 'Help';
});
