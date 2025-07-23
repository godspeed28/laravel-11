<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    $data = [
        'nama' => 'Abe Kolin',
        'title' => 'Home'
    ];
    return view('home', $data);
});

Route::get('/blog', function (Request $request) {

    $query = Article::with(['author', 'category']);

    if ($request->has('search')) {
        $query->where(function ($q) use ($request) {
            $q->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('body', 'like', '%' . $request->search . '%');
        });
    }

    $blogs = $query->latest()->paginate(6)->withQueryString();

    return view('blog', [
        'title' => 'Blog',
        'posts' => $blogs,
    ]);
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
        'posts' => $user->posts()->with(['author', 'category'])->latest()->paginate(6)->withQueryString(),
    ];

    return view('blog', $data);
});

Route::get('/category/{category:slug}', function (Category $category) {

    $data = [
        'title' => 'Articles in ' . $category->name,
        'posts' => $category->posts()->with(['author', 'category'])->latest()->paginate(6)->withQueryString(),
    ];

    return view('blog', $data);
});

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact'
    ];
    return view('contact', $data);
});
