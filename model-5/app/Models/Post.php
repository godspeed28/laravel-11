<?php


namespace App\Models;

use Illuminate\Support\Arr;
use PhpParser\Node\Expr\ArrowFunction;

class Post
{
    public static function all()
    {
        return  [
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
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // ArrowFunction
        $post =  Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
