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

Route::get('/', 'PagesController@home');

Route::get('/messages/{message}', 'MessagesController@show');


Auth::routes();

Route::group(['middleware' => 'auth'], function (){
	Route::post('/messages/create', 'MessagesController@create');
	Route::post('/{username}/dms', 'UsersController@sendPrivateMessage');
	Route::get('/conversations/{conversation}', 'UsersController@showConversation');
	Route::post('/{username}/follow', 'UsersController@follow');
	Route::post('/{username}/unfollow', 'UsersController@unfollow');
	Route::get('/api/notifications', 'UsersController@notifications');
});

Route::get('/api/messages/{message}/responses', 'MessagesController@responses');
Route::get('/messages', 'MessagesController@search');
Route::get('/{username}', 'UsersController@show');
Route::get('/{username}/follows', 'UsersController@follows');
Route::get('/{username}/followers', 'UsersController@followers');
