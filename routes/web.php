<?php

use App\Models\User;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Http\Request;


// Route::get('/', function(){
// 	return view('welcome');
// });

Route::group( [
	'prefix' => 'users',
	'name' => 'users.',
] , function () 
{ 

Route::get('/' , 'UserController@index')->name('index');

Route::get('/create' , 'UserController@create')->name('create');

Route::post('/store', 'UserController@store' )->name('store');

Route::get('/edit/{id}', 'UserController@edit')->name('edit');

Route::post('/update/{id}','UserController@update')->name('update');

Route::get('/{id}', 'UserController@show')->name('show');

Route::post('/delete/{id}' , 'UserController@destroy')->name('delete');

});


Route::get('login','AuthController@getLoginForm')->name('auth.login_form');
Route::post('login','AuthController@LoginForm')->name('auth.login');


Route::group( [
	'prefix' => 'posts',
	'name' => 'posts.',
] , function () 
{ 
Route::get('/' , 'PostController@index')->name('index');

Route::get('create' , 'PostController@create')->name('create');

Route::post('store', 'PostController@store' )->name('store');

Route::get('edit/{id}', 'PostController@edit')->name('edit');

Route::post('update/{id}','PostController@update')->name('update');

Route::get('{id}', 'PostController@show')->name('show');

Route::post('delete/{id}' , 'PostController@destroy')->name('delete');

});

Route::group( [
	'prefix' => 'comments',
	'name' => 'comments.',
] , function () 
{ 
Route::get('/' , 'CommentController@index')->name('comments.index');

Route::get('create' , 'CommentController@create')->name('create');

Route::post('store', 'CommentController@store' )->name('store');

Route::get('edit/{id}', 'CommentController@edit')->name('edit');

Route::post('update/{id}','CommentController@update')->name('update');

Route::get('{id}', 'CommentController@show')->name('show');

Route::post('delete/{id}' , 'CommentController@destroy')->name('delete');
});

Route::group( [
	'prefix' => 'categories',
	'name' => 'categories.',
] , function () 
{ 

Route::get('/' , 'CategoryController@index')->name('index');

Route::get('create' , 'CategoryController@create')->name('create');

Route::post('store', 'CategoryController@store' )->name('store');

Route::get('edit/{id}', 'CategoryController@edit')->name('edit');

Route::post('update/{id}','CategoryController@update')->name('update');

Route::get('{id}', 'CategoryController@show')->name('show');

Route::post('delete/{id}' , 'CategoryController@destroy')->name('delete');
});