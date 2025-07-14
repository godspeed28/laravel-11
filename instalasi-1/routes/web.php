<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'nama' => 'Abe Kolin'
    ];
    return view('welcome', $data);
});

Route::get('/about', function () {
    return view('about');
});
