<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'Learning Laravel',
            'content' => 'This blog post will get you right on track with laravel!'
        ]);
        $post->save();

        $post = new \App\Post([
            'title' => 'Learning Laravel 5',
            'content' => 'This blog post will get you right on track with laravel 5 !'
        ]);
        $post->save();
}
}
