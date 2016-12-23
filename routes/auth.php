<?php
/**
 * Created by PhpStorm.
 * User: lgorriz
 * Date: 20/12/16
 * Time: 16:51
 */


// Posts

Route::get('posts/create',[
    'uses'=> 'CreatePostController@create',
    'as' => 'posts.create',
]);

Route::post('posts/create',[
    'uses' => 'CreatePostController@store',
    'as' => 'posts.store',
]);