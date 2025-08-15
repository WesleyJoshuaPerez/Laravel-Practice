<?php

use Illuminate\Support\Facades\Route;
//use to use the controllers
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

//for crud operation use to access all the method inside the controller posts is the name of folder that contains blade template that we want to use in creating a form
Route::resource('posts', PostController::class);