<?php

namespace App\Models;

use Illuminate\Support\Arr;

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

    public static function find($slug): array
    {
        // return Arr::first(Post::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if(! $post) {
            abort(404);
        }
        return $post;
    }

}




