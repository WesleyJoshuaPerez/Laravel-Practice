<?php

use Illuminate\Support\Facades\Route; //this is line of code  to grab class
//their is 6 types of Route in laravel
/**
 * Route::get //use to display a page or fetch data
 * Route::post // use to submit form or create data
 * Route::put // update full resource
 * Route::patch // update part of a resource
 * Route::delete // delete a resource
 * Route::any // accept any HTTP method
 */

//use to view the webpage using route and the url
//Get route example
Route::get('/', function () {
    return view('home');
});
//parameters using routes
Route::get('/contact', function () {
    return view('contact');
})->name("contactpage");
//Named routes
Route::get('/test', function () {
    return "this is a test!";
})->name("testpage");
// Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
   
//     return $firstname .  " " . $lastname; //take note only one return statement can be use on route
// });

//portfolio related routes
Route::get('/portfolio', function(){
 return view('portfolio');
});
//Grouped routes using prefix to be able to group related blaed folder
Route ::prefix("portfolio")->group(function(){
   Route::get('/company', function(){
       return view('company');
      });
       Route::get('/organization', function(){
       return view('organization');
   });
});


