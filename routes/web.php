<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('home', ['title' => 'arif rizal hompage']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'arif rizal about']);
});




Route::get('/post', function () {
    return view('post', ['title' => 'arif rizal post', 'post' => Post::all()]);
});




Route::get('/post/{post:slug}', function (Post $post) {
    return view('detail_post', ['title' => 'sigle post', 'detailPost' => $post]);
});


Route::get('/authors/{user:username}', function(User $user){
    return view('post', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'post' => $user->posts]);
});



Route::get('/contact', function () {
    return view('contact', ['title' => 'arif rizal contact']);
});

