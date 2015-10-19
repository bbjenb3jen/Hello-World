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

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
Route::bind('songs',function($slug)
{
    return App\songs::where('slug',$slug)->first();

});
/*get('/rock','Rock@index');
get('/song/{slug}','Rock@show');
get('/song/{slug}/edit','Rock@edit');
patch('/song/{slug}','Rock@update');
get('message','Rock@message');
*/

/*$router->get('music',['as'=>'rock_path','Rock@index']);*/
$router->resource('song','Rock',
[
    'only'=>['index','show','edit','update']

]);
/*
$router->resource('song','Rock',
    [
        'except'=>['index','show','edit','update']

    ]);
*/    

/*Route::get('/', 'Crud@index');
Route::post('/save-student', 'Crud@saveStudent');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
