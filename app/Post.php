<?php

namespace App;

class Post
{
    public function getPosts($session)
    {
        if(!$session->has('posts')){
            $this->createDummyData($session);
        }
        return $session->get('posts');
    }
    private function createDummyData($session){
        $post=[
            [
                'title' => 'Learning Laravel',
                'content' => 'This blog post will get right on rrack with Laravel'
            ],
            [
                'title' => 'Learning Laravel',
                'content' => 'This blog post will get right on rrack with Laravel'
            ],
            [
                'title' => 'Learning Laravel',
                'content' => 'This blog post will get right on rrack with Laravel'
            ],
            [
                'title' => 'Learning Laravel',
                'content' => 'This blog post will get right on track with Laravel 5'
            ],
            [
                'title' => 'Learning Laravel',
                'content' => 'This blog post will get right on rrack with Laravel'
            ],
            [
                'title' => 'Something else',
                'content' => 'Some other content'
            ]
        ];
        $session->put('posts', $post);
    }
}
