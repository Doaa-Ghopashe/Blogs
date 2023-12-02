<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //First truncate tables before running seeder
        Category::truncate();
        User::truncate();
        Post::truncate();

        //Authors
        $user = User::factory()->create([
            'username'=>'Doaa Adel'
        ]);


        //Categories
//        Category::factory(3)->create();


        //Posts
        Post::factory(5)->create([
                'user_id'=>$user->id
        ]);

    }
}
