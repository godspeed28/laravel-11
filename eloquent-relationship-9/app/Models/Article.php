<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';

    protected $fillable = [
        'slug',
        'title',
        'author_id',
        'body',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
