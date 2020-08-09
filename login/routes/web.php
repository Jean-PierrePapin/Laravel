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
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

    // return view('welcome');

    /**
     * If condition checks if the user is logged in
     */

    /* if(Auth::check()) {

        return "the user is logged in";

    }
 */
    /**
     * Redirect the user on the admin page and typing the ($username, $password) variables 
     * in order to define them
     */

    /* $username = 's<g<zshr';
    $password = 'ehtrhg564186';

    if(Auth::attempt(['username' => $username, 'password' => $password])) {

        return redirect()->intended('/admin');

    } */
    
    Auth::logout();

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
