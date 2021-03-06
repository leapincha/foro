<?php


use App\Post;

class PostModelTest extends TestCase
{

    function test_adding_a_title_generates_a_slug()
    {
        $post = new Post([
            'title' => 'Como instalar laravel'
        ]);

        $this->assertSame('como-instalar-laravel', $post->slug);

    }

    function test_adding_a_title_changes_a_slug()
    {
        $post = new Post([
            'title' => 'Como instalar laravel'
        ]);

        $post->title = 'Como instalar Laravel 5.1 LTS';

        $this->assertSame('como-instalar-laravel-51-lts', $post->slug);

    }



}
