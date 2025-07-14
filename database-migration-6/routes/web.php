<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

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
        'posts' => Article::all()
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

    $post = Article::findBySlug($slug);

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
