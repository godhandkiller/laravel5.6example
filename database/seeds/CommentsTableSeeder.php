<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $postId = DB::table('posts')->pluck('id');

        DB::table('posts')->insert([
            'body' => 'This is a great post'
        ]);

        foreach (range(1,10) as $index) {
            DB::table('comments')->insert([
            'course_id' => randomElement($postId)
            'student_id' => randomElement($postId)
            ]);
        } 
    }
}
