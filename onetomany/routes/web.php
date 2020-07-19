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

use App\User;
use App\Post;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Insert data
 */

Route::get('/create', function() {

    $user = User::findOrFail(1);

    $post = new Post(['title'=>'My first post with SK 2', 'body'=>'I like Laravel, with SJ 2']);

    $user->posts()->save($post);

});

/**
 * Read data
 */

Route::get('/read', function() {

    $user = User::findOrFail(1);

    //dd($user->posts);

    //return $user->posts;

    foreach($user->posts as $post) {

        echo $post->title . "<br>";

    }

});

/**
 * Update data
 */

Route::get('/update', function() {

    $user = User::find(1);

    //$user->posts()->whereId(1)->update(['title'=>'I like laravel', 'body'=>'This is awesome']);

    $user->posts()->where('id', '=', 2)->update(['title'=>'I like laravel 2', 'body'=>'This is awesome']);
});

/**
 * Delete data
 */

Route::get('/delete', function() {

    $user = User::find(1);

    $user->posts()->whereId(1)->delete();

});