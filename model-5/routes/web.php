<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
        'posts' => Post::all()
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

    $post = Post::find($slug);

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
