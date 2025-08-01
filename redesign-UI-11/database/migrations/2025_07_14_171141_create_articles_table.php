<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // id
            $table->string('slug')->unique(); // slug
            $table->string('title'); // title
            $table->foreignId('author_id')->constrained(
                table: 'users',
                indexName: 'articles_author_id'
            );
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'articles_category_id'
            );
            $table->text('body'); // body isi artikel
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
