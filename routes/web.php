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

Route::get('/', function () {
    return view('about');
});

Route::get('/blog', 'PostController@index');
Route::get('/code', function() {
	return view('code');
});
Route::get('/design', 'ImageController@index');

Route::get('/blog/{permalink}', 'PostController@show');

Route::get('/tags/{name}', 'TagController@show');