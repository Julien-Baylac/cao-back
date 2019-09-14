<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/birdhouses', 'BirdhousesController@getBirdhouses')->name('birdhouses');
Route::get('/badges', 'BadgesController@getBadges')->name('badges');
Route::get('/associations', 'AssociationsController@getAssociations')->name('associations');
Route::get('/notifications', 'NotificationsController@getNotifications')->name('notifications');
Route::get('/messages', 'MessagesController@getMessages')->name('messages');
Route::get('/users', 'UsersController@getUsers')->name('users');
