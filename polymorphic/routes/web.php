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

use App\Staff;
use App\Photo;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Inserting data
 */

Route::get('/create', function() {

    $staff = Staff::find(1);

    $staff->photos()->create(['path'=>'example.jpg']);


});

/**
 * Reading data
 */

Route::get('/read', function() {

    $staff = Staff::findOrFail(1);

    foreach($staff->photos as $photo) {

        return $photo->path;

    }

});

/**
 * Updating data
 */

Route::get('/update', function() {

    $staff = Staff::findOrFail(1);

    $photo = $staff->photos()->whereId(3)->first();

    $photo->path = "Update example.jpg";

    $photo->save();

});

/**
 * Deleting data
 */

Route::get('/delete', function() {

    $staff = Staff::findOrFail(1);

    $staff->photos()->delete();

});

/**
 * Assign data
 */

Route::get('/assign', function() {

    $staff = Staff::findOrFail(1);

    $photo = Photo::findOrFail(4);

    $staff->photos()->save($photo);

});

Route::get('/un-assign', function() {

    $staff = Staff::findOrFail(1);

    $staff->photos()->whereId(4)->update(['imageable_id'=>'', 'imageable_type'=>'']);


});