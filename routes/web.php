


<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'arif rizal hompage']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'arif rizal about']);
});



Route::get('/blog', function () {
    return view('blog', ['title' => 'arif rizal blog']);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'arif rizal contact']);
});

