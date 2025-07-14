<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    $data = [
        'nama' => 'Abe Kolin',
        'title' => 'Home'
    ];
    return view('home', $data);
});

Route::get('/blog', function () {
    $data = [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Abe Kolin',
                'tanggal' => '28 Mei 2024',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A illum ullam autem laudantium reprehenderit, architecto qui iste aut? Expedita voluptate dicta nulla natus tempore provident illo asperiores dolorum beatae fuga.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Abe Kolin',
                'tanggal' => '16 Juli 2024',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores quo architecto eveniet quia assumenda dicta debitis, dignissimos quod eum eaque voluptate sed consectetur quibusdam nulla corporis. Eligendi dolorem eum officiis.',
            ],
        ]
    ];
    return view('blog', $data);
});

Route::get('/about', function () {
    $data = [
        'title' => 'About'
    ];
    return view('about', $data);
});

Route::get('/post/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Abe Kolin',
            'tanggal' => '28 Mei 2024',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A illum ullam autem laudantium reprehenderit, architecto qui iste aut? Expedita voluptate dicta nulla natus tempore provident illo asperiores dolorum beatae fuga.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Abe Kolin',
            'tanggal' => '16 Juli 2024',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores quo architecto eveniet quia assumenda dicta debitis, dignissimos quod eum eaque voluptate sed consectetur quibusdam nulla corporis. Eligendi dolorem eum officiis.',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {

        return $post['slug'] == $slug;
    });

    $data = [
        'title' => 'Single Post',
        'post' => $post
    ];


    return view('post', $data);
});

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact'
    ];
    return view('contact', $data);
});
