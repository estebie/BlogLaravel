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
Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', function(){

	return view('/welcome');
});

//Posts Routes
Route::get('/posts', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/home', 'PostsController@index');
Route::post('/posts', 'PostsController@store');

//Route::get('/posts/create', 'PostsController@create');

Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');
Route::get('/welcome', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::post('/posts/{post}/delete', 'PostsController@delete');
Route::post('/posts/{post}/edit', 'PostsController@updateData');
Route::get('/posts/{post}/edit', 'PostsController@editBody');
Route::get('/posts/tags/{tag}', 'TagsController@index');
Route::get('/user', 'PostsController@showUserPosts');