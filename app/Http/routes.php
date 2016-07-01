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

// Route::get('/', function () {
//     return view('welcome');
// });


//Getters routes
Route:: get('/',[
		'uses'=>'\smugglechat\Http\Controllers\HomeController@index',
		'as'=>'home',
	]);

Route:: get('/login',[
		'uses'=>'\smugglechat\Http\Controllers\SigninController@login',
		'as'=>'signin',
	]);

Route:: get('/logout',[
		'uses'=>'\smugglechat\Http\Controllers\SigninController@logout',
		'as'=>'logout',
	]);

Route:: get('/signup',[
		'uses'=>'\smugglechat\Http\Controllers\SignupController@signup',
		'as'=>'signup',

	]);

Route:: get('/profile/{firstname}',[
		'uses'=>'\smugglechat\Http\Controllers\ProfileController@profile',
		'as'=>'dashboard',

	]);

Route:: get('/chat',[
		'uses'=>'\smugglechat\Http\Controllers\ChatController@chat',
		'as'=>'chat',

	]);

Route:: get('/search',[
		'uses'=>'\smugglechat\Http\Controllers\SearchController@search',
		'as'=>'search',
	]);

//Posters routes
Route::post('/signup', [
		'uses'=>'\smugglechat\Http\Controllers\SignupController@postSignup',
		'as'=>'createUser',

	]);

Route::post('/signin', [
	'uses'=>'\smugglechat\Http\Controllers\SigninController@postSignin',
	'as'=>'loginUser',

]);

Route:: get('/chat/add/{firstname}',[
		'uses'=>'\smugglechat\Http\Controllers\ChatController@getAdd',
		'as'=>'addChat',

	]);

Route:: get('/chat/accept/{firstname}',[
		'uses'=>'\smugglechat\Http\Controllers\ChatController@getAccept',
		'as'=>'acceptChat',

	]);

Route:: post('/message',[
		'uses'=>'\smugglechat\Http\Controllers\MessageController@postMessage',
		'as'=>'chat.index',

	]);


//Alerts
// Route::get('/alert', function(){
// 	return redirect()->route('signin')->with('success','User has been registered');
// });