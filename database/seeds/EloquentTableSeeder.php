<?php

use Illuminate\Database\Seeder;
use App\Post as Post;
use App\Comment as Comment;
use App\User as User;
use Faker\Factory as Faker;

class EloquentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker  =  Faker::create();

        foreach (range(1,5) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('test')
            ]);
        }

        foreach (range(1,15) as $index) {
            Post::create([
                'title' => $faker->catchPhrase,
                'body' => $faker->words(10, true),
                'user_id' => $faker->numberBetween(1, 5),
                'created_at' => $faker->dateTimeThisYear('now', null)
            ]);
        }

        $posts = Post::pluck('id');

        foreach (range(1,15) as $index) {
            Comment::create([
                'body' => $faker->words(10, true),
                'post_id' => $faker->randomElement($posts),
                'user_id' => $faker->numberBetween(1, 5),
                'created_at' => $faker->dateTimeThisYear('now', null)  
            ]);
        } 


    }
}
