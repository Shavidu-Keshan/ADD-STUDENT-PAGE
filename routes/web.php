<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Points to welcome.blade.php
});

Route::get('/StudentSavePage', function () {
    return view('Index'); // Points to Index.blade.php
});
