<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->words(2, true); // contoh nama kategori: "Dark Fantasy"

        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
