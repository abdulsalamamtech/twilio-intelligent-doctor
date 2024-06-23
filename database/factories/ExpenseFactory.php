<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'category_id' => function(){
                $categories = Category::all()->count();
                return random_int(1, $categories);
            },
            'name' => $this->faker->name,
            'price' => function (){
                return random_int(150, 3000);
            },
           'status' => $this->faker->boolean,
        ];
    }
}
