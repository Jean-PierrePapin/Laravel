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
use App\Address;

Route::get('/', function () {
    return view('welcome');
});

/**
 * create new addresses in the addresses table for the user in the users table
 */

Route::get('/insert', function () {

    $user = User::findOrFail(1);

    $address = new Address(['name'=>'4435 Sunset Blvd FL FL 99218']);

    $user->address()->save($address);

});


/**
 * Updating data
 */

Route::get('/update', function() {

    $address = Address::whereUserId(1)->first();

    $address->name = "4353 Update Av, Alaska";
    
    $address->save();

});

/**
 * Read and delete datas
 */


Route::get('/read', function() {

   $user = User::findOrFail(1);

   echo $user->address->name;

});

Route::get('/delete', function() {

    $user = User::findOrFail(1);

    $user->address()->delete();

});