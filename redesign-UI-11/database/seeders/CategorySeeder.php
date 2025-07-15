<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Dasar Pemrograman',
            'Laravel',
            'Karir Programmer',
            'Database',
            'Version Control',
            'Frontend Development',
            'Backend Development',
            'Mobile Development',
            'Machine Learning',
            'DevOps',
        ];

        foreach ($categories as $name) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
