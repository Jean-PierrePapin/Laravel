<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Country;
use App\Post;
use App\User;
use App\Photo;
use App\Tag;

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



/* 
Route::get('/insert', function() {

    DB::insert('insert into posts(title, content) values(?, ?)', ['Django', 'Django best thing ever !!']);

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

/* 
Route::get('/basicinsert', function() {

    $post = new Post;

    $post->title = 'New eloquent title insert';
    $post->content = 'Eloquent is really valuable';

    $post->save();
});
 */

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
/* 
Route::get('/delete2', function() {

    Post::destroy([4, 5]);

    // Post::where('is_admin', 0)->delete();


});
 */

/**
 *  Soft Deleting / Trashing
 */
/* 
Route::get('/softdelete', function() {

    Post::find(6)->delete();

});
 */
/**
 * Retrieving deleted / trashed records
 */
/* 
Route::get('/readsoftdelete', function() {

    // $post = Post::find(10);

    // return $post; 

    // $post = Post::withTrashed()->where('id', 6)->get();

    // return $post;
    
    $post = Post::onlyTrashed()->where('id', 6)->get();

    return $post;


});
 */
/**
 * Restoring deleted / trashed records
 */

/*  
Route::get('/restore', function() {

    Post::withTrashed()->where('is_admin', 0)->restore();

});
 */

/**
 * Deleting a record permanently
 */
/* 
Route::get('/forcedelete', function() {

    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();

});
 */
/*
|--------------------------------------------------------------------------
| ELOQUENT Relationship
|--------------------------------------------------------------------------
*/

/**
 * 1 to 1 relationship
 *  */ 

/* 
Route::get('/user/{id}/post', function($id) {

    return User::find($id)->post;

});
 */

/**
 * The inverse relation
 */
/* 
Route::get('/post/{id}/user', function($id) {

    return Post::find($id)->user->name;

}); */


/**
 * One to many relationship
 */
/* 
Route::get('/posts', function() {

    $user = User::find(1);

    foreach($user->posts as $post) {

        echo $post->title . "<br>";

    }

});
 */

/**
 * Many to many relations
 */
/* 
Route::get('/user/{id}/role', function($id) {

    // $user = User::find($id)->role->orderBy('id', 'desc')->get();
    // return $user;
    $user = User::find($id);

    foreach($user->roles as $role) {

        return $role->name;

    }

});
 */
/**
 * Accessing the intermediate table / pivot
 */
/* 
Route::get('user/pivot', function() {

    $user = User::find(1);

    foreach($user->roles as $role) {

        echo $role->pivot->created_at;

    }

});
 */

/**
 * Has many through relation
 */
/* 
Route::get('/user/country', function() {

    $country = Country::find(2);

    foreach($country->posts as $post) {

        return $post->title;

    }

});
 */

/**
 * Polymorphic relation
 */
/* 
Route::get('post/{id}/photos', function($id) {

    $post = Post::find($id);

    foreach($post->photos as $photo) {

        echo $photo->path . '<br>';

    }

});

 */

/**
 * Polymorphic relation the inverse
 */
/* 
Route::get('photo/{id}/post', function($id) {

    $photo = Photo::findOrFail($id);

    return $photo->imageable;

});
 */


/**
 * Polymorphic relation many to many retrieving
 */
/* 
Route::get('post/tag', function() {

    $post = Post::find(1);

    foreach($post->tags as $tag) {

        echo $tag->name;

    }

});
 */

/**
 * Polymorphic relation many to many retrieving owner
 */
/* 
Route::get('tag/post', function() {

    $tag = Tag::find(2);

    foreach($tag->posts as $post) {

        echo $post->title;

    }

}); */


/*
|--------------------------------------------------------------------------
| CRUD application
|--------------------------------------------------------------------------
*/

Route::resource('/posts', 'PostsController@index');