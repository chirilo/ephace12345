<?php

/**
 * Frontend Controllers
 */
Route::get('/', ['as' => 'home', 'uses' => 'FrontendController@index']);
Route::get('macros', 'FrontendController@macros');

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function ()
{
	Route::get('dashboard', ['as' => 'frontend.dashboard', 'uses' => 'DashboardController@index']);
	Route::get('timeline', ['as' => 'frontend.dashboard', 'uses' => 'DashboardController@timelineProfile']);
	Route::get('prominense', ['as' => 'frontend.prominense', 'uses' => 'ProminenseBuilderController@index']);
	Route::get('prominense/joyride', ['as' => 'frontend.prominense.joyride', 'uses' => 'ProminenseBuilderController@joyride']);
	Route::get('placetimenow', ['as' => 'frontend.placetimenow', 'uses' => 'PlacetimenowController@index']);
	Route::get('placetimenow/joyride', ['as' => 'frontend.placetimenow.joyride', 'uses' => 'PlacetimenowController@joyride']);
	Route::get('prominense/builder', ['as' => 'frontend.prominense.builder', 'uses' => 'ProminenseBuilderController@builder']);
	// Route::get('placetimenow/chat', ['as' => 'frontend.placetimenow', 'uses' => 'PlacetimenowController@index']);
	/*Route::get('messages', ['as' => 'frontend.dashboard', 'uses' => 'DashboardController@messageChat']);
	Route::get('socials', ['as' => 'frontend.dashboard', 'uses' => 'DashboardController@socialProfiles']);
	Route::get('settings', ['as' => 'frontend.dashboard', 'uses' => 'DashboardController@profileSettings']);*/
	Route::resource('profile', 'ProfileController', ['only' => ['edit', 'update']]);
});
