<?php

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

Route::get('/','CubaController@home') ;


Route::get('/', function () {

    $tasks = [
    	'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert'
         ];

    return view('welcome', ['tasks' => $tasks,
    'foo' => 'foobar' ]);
});

Route::get('/about', function () {
    return view('about');
Auth::routes ();
});

Route::get('/call', function () {
    return view('call');
Auth::routes ();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get ('/projects','CubaController@index');