<?php

namespace Database\Factories;

use App\Models\Product;
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

    protected $model = Product::class;


    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->paragraphs(2, true),
            'price' => fake()->randomFloat(2,0,100),
            'image' => "https://www.pngplay.com/wp-content/uploads/13/Cabernet-Sauvignon-Free-PNG.png"
        ];
    }
}
