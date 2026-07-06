<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            // Membuat nama produk elektronik acak
            'name' => $this->faker->randomElement(['Laptop', 'Mouse', 'Keyboard', 'Monitor', 'Headset', 'Webcam', 'SSD', 'RAM', 'Router', 'Speaker']) . ' ' . $this->faker->word(),
            
            // Membuat harga acak kelipatan 10.000 antara 50rb sampai 5jt
            'price' => $this->faker->numberBetween(5, 500) * 10000,
            
            // Membuat stok acak antara 5 sampai 50
            'stock' => $this->faker->numberBetween(5, 50),
            
        ];
    }
}
