<?php

//Route::get('/', 'DashboardController@dashboard');
Route::group([
	'prefix' => 'dashboard'
], function () {
	Route::get('/', [
		'uses' => 'DashboardController@dashboard',
		'as' => 'dashboard',
	]);
});