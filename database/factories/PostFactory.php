<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = User::all()->count()),
            'title' => $this->faker->sentence(5),
            'anons' => $this->faker->text(255),
            'content' => $this->faker->realTextBetween(200, 500),
            'archive' => $this->faker->boolean(),
            'author' => $this->faker->name()
        ];
    }
}
