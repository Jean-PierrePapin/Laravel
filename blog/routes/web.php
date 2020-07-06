<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Post;

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
/* 
Route::get('/post/{id}/{name}/{password}', 'PostsController@show_post');

Route::resource('posts', 'PostsController'); 

Route::get('/contact', 'PostsController@contact');
 */

/*
|--------------------------------------------------------------------------
| DB RAW SQL QUERIES
|--------------------------------------------------------------------------
|
*/




Route::get('/insert', function() {

    DB::insert('insert into posts(title, content) values(?, ?)', ['Django', 'Django best thing ever !!']);

});


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
/* 
Route::get('/delete', function() {

    $deleted = DB::delete('delete from posts where id = ?', [1]);

    return $deleted;


});
 */
 
/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

/**
 * READ DATA
 */

/* 
Route::get('/read', function() {

    $posts = Post::all();

    foreach($posts as $post) {

        return $post->title;

    }

});
 */

/**
 * FIND DATA
 */
/* 
 Route::get('/find', function() {

    $post = Post::find(2);

    return $post->title;

 });
 */

/**
 * MORE WAYS TO RETRIEVE DATA
 */
/* 
Route::get('/findwhere', function() {

    // Chaining
    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

    return $posts;

});
 */


/* 
Route::get('/findmore', function() {

    $posts = Post::findOrFail(2);

    return $posts;
 

    $posts = Post::where('id', '<', 50)->firstOrFail();

    return $posts;
});
 */

/**
 * INSERTING AND SAVING DATA
 */


Route::get('/basicinsert', function() {

    $post = new Post;

    $post->title = 'New eloquent title insert';
    $post->content = 'Eloquent is really valuable';

    $post->save();
});


/* 
Route::get('/basicinsert2', function() {

    $post = Post::find(2);

    $post->title = 'New eloquent title insert 2';
    $post->content = 'Eloquent is really valuable 2';

    $post->save();
});

 */

/**
 * Creating data and configuring mass assignment
 */

/* 
Route::get('/create', function() {

    Post::create(['title' => 'The create method', 'content' => 'I\'m learning a lot in this course !']);

}); 
*/


 /**
 * UPDATING WITH ELOQUENT 
 */
/* 
Route::get('/update', function() {

    Post::where('id', 2)->where('is_admin', 0)->update(['title' => 'NEW PHP TITLE', 'content' => 'I like Laravel']);

});

 */

/**
 * DELETING DATA
 */
/* 
 Route::get('/delete', function() {

    $post = Post::find(2);

    $post->delete();

 });

 */

Route::get('/delete2', function() {

    Post::destroy([4, 5]);

    // Post::where('is_admin', 0)->delete();


});


/**
 *  Soft Deleting / Trashing
 */

Route::get('/softdelete', function() {

    Post::find(6)->delete();

});

/**
 * Retrieving deleted / trashed records
 */

Route::get('/readsoftdelete', function() {

    /* $post = Post::find(10);

    return $post; */

   /*  $post = Post::withTrashed()->where('id', 6)->get();

    return $post; */
    
    $post = Post::onlyTrashed()->where('id', 6)->get();

    return $post;


});


