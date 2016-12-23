<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class ExampleTest extends FeatureTestCase
{

    public function testBasicExample()
    {

        $user = factory(\App\User::class)->create([
            'name'=>'Duilio Palacios',
            'email' => 'admin@styde.net'
        ]);

        $this->actingAs($user,'api')
            ->visit('api/user')
             ->see('Duilio Palacios')
             ->see('admin@styde.net');
    }
}
