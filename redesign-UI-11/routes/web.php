<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    $data = [
        'nama' => 'Abe Kolin',
        'title' => 'Home'
    ];
    return view('home', $data);
});

Route::get('/blog', function () {

    $blogs = Article::all();

    $data = [
        'title' => 'Blog',
        'posts' => $blogs,
    ];
    return view('blog', $data);
});

Route::get('/about', function () {
    $data = [
        'title' => 'About'
    ];
    return view('about', $data);
});

Route::get('/post/{post:slug}', function (Article $post) {

    $data = [
        'title' => 'Single Post',
        'post' => $post,
    ];


    return view('post', $data);
});

Route::get('/author/{user}', function (User $user) {

    $data = [
        'title' => 'Articles by ' . $user->name,
        'posts' => $user->posts,
    ];

    return view('blog', $data);
});

Route::get('/category/{category:slug}', function (Category $category) {

    $data = [
        'title' => 'Articles in ' . $category->name,
        'posts' => $category->posts,
    ];

    return view('blog', $data);
});

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact'
    ];
    return view('contact', $data);
});
