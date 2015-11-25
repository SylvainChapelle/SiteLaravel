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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[
    'as'=>'listLink',
    'uses'=>'LinkController@listlink'
]);

Route::get('/add',[
    'as'=>'addLink',
    'uses'=>'LinkController@addLink'
]);

Route::post('/Create',[
    'as'=>'valideLink',
    'uses'=>'LinkController@createLink'
]);
