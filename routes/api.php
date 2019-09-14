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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('connection', 'Auth\RegisterController@create')->name('RegisterController.create');
Route::post('login', 'Auth\LoginController@authenticate')->name('LoginController.authenticate');
Route::get('show_birdhouses', 'BirdhousesController@show')->name('BirdhousesController.show');
Route::get('show_all_birdhouses', 'BirdhousesController@showAll')->name('BirdhousesController.showAll');
Route::delete('show_birdhouses/{id}/delete', 'BirdhousesController@destroy')->name('Birdhouses.delete');


// protection avec l'api_token
Route::group(['middleware' => 'auth:api'], function() {
    Route::put('update_birdhouse/{id}/update', 'BirdhousesController@update')->name('BirdhousesController.update');
    Route::get('show_user', 'UsersController@show')->name('UsersController.show');
    Route::post('create_birdhouses', 'BirdhousesController@create')->name('BirdhousesController.create');
});
