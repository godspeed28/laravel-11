<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->unverified()->create();
        // User::factory(5)->create();
        // User::factory()->admin()->create();

        // Article::factory(100)->recycle(Category::factory(5)->create())->recycle(User::factory(5)->create())->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
            ArticleSeeder::class,
        ]);
    }
}
