<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
    //return view('welcome');

    $data = [
        'title'     =>  'Hi myself I hope you to code ',
        'content'   =>  'This laravel course is good for SaaS business MVP'
    ];

    Mail::send('emails.test', $data, function($message) {

        $message->to('skouo82@gmail.com', 'Samuel')->subject('Hello myself, how are you?');


    });

});
