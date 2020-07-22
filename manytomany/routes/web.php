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
use App\Role;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Inserting data
 */

Route::get('/create', function() {

    $user = User::find(1);

    $role = new Role(['name'=>'Administrator']);

    $user->roles()->save($role);

});

/**
 * Reading data
 */

Route::get('/read', function() {

    $user = User::findOrFail(1);

    foreach($user->roles as $role) {

        echo $role->name;

    }

});

/**
 * Updating data
 */

Route::get('/update', function() {

    $user = User::findOrFail(1);

    if($user->has('roles')) {

        foreach($user->roles as $role) {

            if($role->name == 'Administrator') {

                $role->name = 'subscriber';
                $role->save();

            } elseif ($role->name == 'subscriber') {

                $role->name = 'Administrator';
                $role->save();

            }

        }
    }
});

/**
 * Deleting data
 */

Route::get('/delete', function() {

    $user = User::findOrFail(1);

    // $user->roles()->delete();

    foreach($user->roles as $role) {

        // dd($role);

        $role->whereId(2)->delete();

    }

});

/**
 * Attaching, detaching and syncing
 */

// attaching
Route::get('/attach', function() {

    $user = User::findOrFail(1);

    $user->roles()->attach(3);

});

// detaching
Route::get('/detach', function() {

    $user = User::findOrFail(1);

    $user->roles()->detach(3);

});

// syncing
Route::get('/sync', function() {

    $user = User::findOrFail(1);

    $user->roles()->sync([2]);

});