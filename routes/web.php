<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['title' => 'Index']);
});

Route::get('/register', function () {
    return view('register', ['title' => 'Register']);
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});
