<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


class Post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'judul article satu',
                'author' => 'arif',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, ducimus. Rerum laboriosam commodi eveniet corporis ea quo sed officia placeat.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, distinctio magnam magni odit similique sit!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'judul article dua',
                'author' => 'arif',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, distinctio magnam magni odit similique sit!sit amet consectetur adipisicing elit. Aperiam, distinctio magnam magni odit similique sit!'
            ]
        ];
    }
}





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
    $post = Arr::first(Post::all(), function($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('detail_post', ['title' => 'sigle post', 'detailPost' => $post]);
});





Route::get('/contact', function () {
    return view('contact', ['title' => 'arif rizal contact']);
});

