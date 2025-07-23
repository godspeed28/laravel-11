<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function home()
    {
        return view('home', [
            'nama' => 'Abe Kolin',
            'title' => 'Home'
        ]);
    }

    public function blog(Request $request)
    {
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
    }

    public function about()
    {
        return view('about', [
            'title' => 'About'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact'
        ]);
    }

    public function showPost(Article $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }

    public function authorPosts(User $user)
    {
        return view('blog', [
            'title' => 'Articles by ' . $user->name,
            'posts' => $user->posts()->with(['author', 'category'])->latest()->paginate(6)->withQueryString(),
        ]);
    }

    public function categoryPosts(Category $category)
    {
        return view('blog', [
            'title' => 'Articles in ' . $category->name,
            'posts' => $category->posts()->with(['author', 'category'])->latest()->paginate(6)->withQueryString(),
        ]);
    }
}
