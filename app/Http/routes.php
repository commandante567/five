<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::group(['middleware' => 'auth','namespace' => 'Admin'], function() {
	Route::get('admin', 'AdminController@index');
});

//Route::get('/admin/blog/create','Admin\BlogsController@create');
//Route::post('/admin/blog', 'Admin\BlogsController@store');
//Route::get('/admin/blog/{id}', 'Admin\BlogsController@show');
//Route::get('/admin/blog/{id}/edit', 'Admin\BlogsController@edit');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin','prefix' => 'admin'], function()
{
	Route::resource('blog', 'BlogsController');

	//Route::resource('article', 'ArticlesController');
	Route::get('/blog/{blog_id}/{id}', 'ArticlesController@show');
});

