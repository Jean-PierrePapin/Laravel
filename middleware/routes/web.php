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

Route::get('/', function () {

    $user = Auth::user();

    if($user->isAdmin()) {

        echo "this is user is a administrator";

    }


    //return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/user/roles', ['middleware' => ['role', 'auth', 'web'], function ($id) {
    
    return "Middleware role";

}]);