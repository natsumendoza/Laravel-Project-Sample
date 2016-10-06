<?php

/*
|----------------------------------------------------------------------------
| Application Routes
|----------------------------------------------------------------------------
|
| This route group applies the 	"web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
	Route::get('cards', 'CardsController@index');
	Route::get('cards/{card}', 'CardsController@show');

	Route::post('cards/{card}/notes', 'NotesController@store');

	Route::get('notes/{note}/edit', 'NotesController@edit');
	Route::patch('notes/{note}', 'NotesController@update');
});

