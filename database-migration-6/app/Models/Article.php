<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'slug',
        'title',
        'author',
        'tanggal',
        'body',
    ];

    protected $dates = ['tanggal'];

    // Ganti nama method agar tidak bentrok dengan bawaan Laravel
    public static function findBySlug(string $slug): self
    {
        $post = static::where('slug', $slug)->first();

        if (!$post) {
            abort(404); // atau throw ModelNotFoundException
        }

        return $post;
    }
}
