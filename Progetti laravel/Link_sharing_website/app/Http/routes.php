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

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', 'PostController@frontpage');
Route::get('u/{user}', 'UserController@show');
Route::get('r/{sub}', 'SubController@show');

Route::get('authcheck', function(){
    return json_encode(Auth::check());
});

Route::get('sub/new', [
    'middleware' => 'auth',
    'uses' => 'SubController@displayform'
]);

Route::post('sub/new', [
    'middleware' => 'auth',
    'uses' => 'SubController@storesub'
]);

Route::get('post/new', [
    'middleware' => 'auth',
    'uses' => 'PostController@displayform'
]);

Route::post('post/new', [
    'middleware' => 'auth',
    'uses' => 'PostController@storepost'
]);

Route::get('sub/new', [
    'middleware' => 'auth',
    'uses' => 'SubController@displayform'
]);

Route::post('vote', [
    'middleware' => 'auth',
    'uses' => 'VoteController@vote'
]);