<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('test',array('as'=>'test','before'=>'auth','uses'=>'HomeController@test'));


Route::post('/signup',array('as'=>'signup','before'=>'csrf','uses'=>'AuthController@userSignup'));
Route::post('/signin',array('as'=>'signin','before'=>'csrf','uses'=>'AuthController@userLogin'));
Route::get('logout',array('as'=>'logout','before'=>'auth','uses'=>'AuthController@userLogout'));

Route::get('home',array('as'=>'home','before'=>'auth','uses'=>'HomeController@getHome'));

Route::get('newBlog',array('as'=>'newBlog','before'=>'auth','uses'=>'BlogController@newBlog'));
Route::post('postBlog',array('as'=>'postBlog','before'=>'auth','uses'=>'BlogController@createBlog'));
Route::get('readBlog/{bid}',array('as'=>'readBlog','before'=>'auth','uses'=>'BlogController@readBlog'));
Route::get('editBlog/{bid}',array('as'=>'editBlog','before'=>'auth','uses'=>'BlogController@editBlog'));
Route::get('deleteBlog',array('as'=>'deleteBlog','before'=>'auth','uses'=>'BlogController@deleteBlog'));
Route::post('posteditBlog',array('as'=>'posteditBlog','before'=>'auth','uses'=>'BlogController@updateBlog'));
Route::get('allBlogs',array('as'=>'allBlogs','before'=>'auth','uses'=>'BlogController@getAllBlogs'));

Route::get('getAllblogs',array('as'=>'getAllblogs','before'=>'auth','uses'=>'BlogController@showAllBlogs'));
Route::get('getMyblogs',array('as'=>'getMyblogs','before'=>'auth','uses'=>'BlogController@showMyBlogs'));


Route::get('profile',array('as'=>'profile','before'=>'auth','uses'=>'ProfileController@getProfile'));
Route::get('editProfile',array('as'=>'editProfile','before'=>'auth','uses'=>'ProfileController@editProfile'));
Route::post('updateProfile',array('as'=>'updateProfile','before'=>'auth','uses'=>'ProfileController@updateProfile'));
