<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected  $model = Post::class;

    public function definition(): array
    {
        return [
            'title' =>$this->faker->sentence,
            'slug'=> $this->faker->slug,
            'excerpt' => $this->faker->sentence ,
            'category_id' => Category::factory(),
            'user_id'=> User::factory() ,
            'body'=> $this->faker->paragraph

        ];
    }
}