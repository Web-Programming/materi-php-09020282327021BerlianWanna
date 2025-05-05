<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/collapsed-sidebar', function () {
    return view('collapsed-sidebar');
});
