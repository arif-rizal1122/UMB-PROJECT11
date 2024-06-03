<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;





Route::get('/', function () {
    return view('home', ['title' => 'arif rizal hompage']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'arif rizal about']);
});




Route::get('/post', function () {
    return view('post', ['title' => 'arif rizal post', 'post' => Post::all()]);
});




Route::get('/post/{slug}', function($slug) {
    $post = Post::find($slug);
    return view('detail_post', ['title' => 'sigle post', 'detailPost' => $post]);
});





Route::get('/contact', function () {
    return view('contact', ['title' => 'arif rizal contact']);
});

