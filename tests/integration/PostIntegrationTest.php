<?php

use App\Post;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostIntegrationTest extends TestCase
{

    public function test_a_slug_is_generated_and_saved_to_the_database()
    {

        $user = $this->defaultUser();

        $post = factory(Post::class)->make([
            'title' => 'Como instalar laravel'
        ]);

        $user->posts()->save($post);

        $this->seeInDatabase('posts',[
            'slug' => 'como-instalar-laravel'
        ]);
    }
}
