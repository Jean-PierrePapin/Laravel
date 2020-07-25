<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Post;
use App\Tag;
use App\Video;

Route::get('/', function () {
    return view('welcome');
});


/**
 * Inserting Data
 */

Route::get('/create', function() {

    $post = Post::create(['name'=>'My first post']);

    $tag1 = Tag::find(1);

    $post->tags()->save($tag1);

    $video = Video::create(['name'=>'video.mov']);

    $tag2 = Tag::find(2);

    $video->tags()->save($tag2);

});

/**
 * Reading and updating data
 */

Route::get('/read', function() {

    $post = Post::findOrFail(4);

    foreach($post->tags as $tag) {

        echo $tag;

    }

});

Route::get('/update', function() {

    /* $post = Post::findOrFail(4);

    foreach($post->tags as $tag) {

        return $tag->whereName('PHP')->update(['name'=>'Updated PHP']);

    }
 */

    $post = Post::findOrFail(1);

    $tag = Tag::find(3);

    // $post->tags()->save($tag);

    // $post->tags()->attach($tag);

    $post->tags()->sync([2]);

});