<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('todo');
});
Route::get('posts/create', function () {
    return view('posts.create');
})->name("create");

 

//use to access controller into view
Route::resource('posts', controller: TodoController::class);