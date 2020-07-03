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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Hi about page";
});

Route::get('/contact', function () {
    return "Hi I am contact";
});

Route::get('/post/{id}/{name}', function ($id, $name) {
    return "This is post number " . $id . " " . $name;
});

Route::get('admin/posts/example', ['as' => 'admin.home', function() {
        $url = route('admin.home');

        return "this url is " . $url;
    } 
]); */

Route::get('/post/{id}/{name}/{password}', 'PostsController@show_post');

/* Route::resource('posts', 'PostsController'); */

Route::get('/contact', 'PostsController@contact');


/*
|--------------------------------------------------------------------------
| DB RAW SQL QUERIES
|--------------------------------------------------------------------------
|
*/


use Illuminate\Support\Facades\DB;
/* 
Route::get('/insert', function() {

    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with laravel', 'Laravel best thing ever !!']);

});
 */
/* 
Route::get('/read', function() {

    $results = DB::select('select * from posts where id = ?', [1]);

    var_dump($results);
    
    echo '<br>';

    foreach ( $results as $post ) {
        return $post->title;
    }

});
 */

/* 
Route::get('/update', function() {

    $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);

    return $updated;

});

 */

Route::get('/delete', function() {

    $deleted = DB::delete('delete from posts where id = ?', [1]);

    return $deleted;


});
