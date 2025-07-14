<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'nama' => 'Abe Kolin'
    ];
    return view('welcome', $data);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
