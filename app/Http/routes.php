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

Route::get('/','welcomeController@welcome');
Route::resource('agents','AgentController');
Route::get('products','ProductController@index');
Route::group(array('before' => 'auth'),function(){
  Route::get('deshboard', function () {
      return 'welcome to deshboard!';
  });
  Route::get('auth/login',[
    'uses'=> 'Auth\AuthController@getLogin'
  ]);
  Route::post('auth/login',[
    'uses'=> 'Auth\AuthController@postLogin'
  ]);
  Route::get('auth/register',[
    'uses'=> 'Auth\AuthController@getRegister'
  ]);
  Route::post('auth/register',[
    'uses'=> 'Auth\AuthController@postRegister'
  ]);
  Route::get('auth/logout',[
    'uses'=> 'Auth\AuthController@logout'
  ]);
});
