<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $faker  =  Faker::create();

        DB::table('posts')->insert([
            'title' => $faker->name,
            'body' => $faker->words(10, true),
        ]);

        DB::table('posts')->insert([
            'title' => $faker->name,
            'body' => $faker->words(10, true),
        ]);


        DB::table('posts')->insert([
            'title' => $faker->name,
            'body' => $faker->words(10, true),
        ]);

        DB::table('posts')->insert([
            'title' => $faker->name,
            'body' => $faker->words(10, true),
        ]);

        DB::table('posts')->insert([
            'title' => $faker->name,
            'body' => $faker->words(10, true),
        ]);

        DB::table('posts')->insert([
            'title' => $faker->name,
            'body' => $faker->words(10, true),
        ]);
        
        $postId = DB::table('posts')->pluck('id');

        foreach (range(1,10) as $index) {
            DB::table('comments')->insert([
            'body' => $faker->words(10, true),
            'post_id' => $faker->randomElement($postId)
            ]);
        } 
    }
}
