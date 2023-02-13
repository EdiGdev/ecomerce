<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => 'subcategories/' . $this->faker->picsum(storage_path('app/public/subcategories'), 640, 480, null, false),
            'name'=>  $this->faker->sentence(),
            'slug'=>  $this->faker->sentence(),
            'category_id' => Category::factory(),
        ];
    }
}
