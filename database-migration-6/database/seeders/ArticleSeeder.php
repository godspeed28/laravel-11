<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Abe Kolin',
            'tanggal' => '2024-05-28',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A illum ullam autem laudantium reprehenderit, architecto qui iste aut? Expedita voluptate dicta nulla natus tempore provident illo asperiores dolorum beatae fuga.'
        ]);

        Article::create([
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Abe Kolin',
            'tanggal' => '2024-07-16',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores quo architecto eveniet quia assumenda dicta debitis, dignissimos quod eum eaque voluptate sed consectetur quibusdam nulla corporis. Eligendi dolorem eum officiis.'
        ]);
    }
}
