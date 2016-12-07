<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ------TEST CRÉATION D'UNE ROUTE POUR 'AFFICHER HELLO WORLD'------
Route::get('/hello', function(){
    return 'hello world!';
});
*/

route::resource('/post', 'PostController');
route::resource('/event', 'EventController');
route::resource('/admin', 'AdminController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('/', 'AdminController');
    Route::resource('post', 'Admin\PostController');
    Route::resource('event', 'Admin\EventController');
});