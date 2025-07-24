<?php

use Illuminate\Support\Facades\Route;

//use to view the webpage using route and the url
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});