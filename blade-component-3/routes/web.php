<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'nama' => 'Abe Kolin',
        'title' => 'Home'
    ];
    return view('home', $data);
});

Route::get('/blog', function () {
    $data = [
        'title' => 'Blog'
    ];
    return view('blog', $data);
});

Route::get('/about', function () {
    $data = [
        'title' => 'About'
    ];
    return view('about', $data);
});

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact'
    ];
    return view('contact', $data);
});
