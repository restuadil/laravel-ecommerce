<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->unique()->words(3, true), // Nama produk unik
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(), // Deskripsi random
            'price' => $this->faker->numberBetween(1000, 10000), // Harga acak antara 1000 sampai 10000
            'stock' => $this->faker->numberBetween(1, 100), // Stock acak antara 1 sampai 100
            'category_id' => Category::inRandomOrder()->first()->id, // Ambil category_id acak dari tabel category
            'is_active' => $this->faker->boolean(), // Boolean acak
        ];
    }
}
