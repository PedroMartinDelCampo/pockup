<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', 'ApiController@index');

Route::group(['prefix' => 'categories'], function() {

	Route::get('/', 'ApiController@categories');

	Route::group(['prefix' => '{category}'], function() {

		Route::get('/', 'ApiController@category');
		Route::get('events', 'ApiController@events');
		Route::get('groups', 'ApiController@groups');
		Route::get('places', 'ApiController@places');
		
	});

});

Route::post('groups', 'GroupsController@create');

Route::post('users', 'ApiController@registerUser');
Route::post('access', 'ApiController@access');

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
*/
