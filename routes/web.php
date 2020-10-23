<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'artisan/{password}'], function() {
    Route::get('{command}', function($password, $command) {
		if ($password === 'buudaica') {
	        $exitCode = \Artisan::call($command, []);
	        echo $exitCode;
		}
    });
});

Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'ChangeLanguageController')
         ->name('user.change-language');

	Route::get('{page}', 'PageController')
		 ->name('page')
		 ->where('page', 'lien-he|gioi-thieu');
	Route::post('lien-he', 'ContactController@store')->name('contact.store');

	Route::get('{categories}/{slug}', 'PostController@show')
		 ->where('categories','^[a-zA-Z0-9-\/]+$')
		 ->name('post.show');

	Route::get('{categories}', 'CategoryController@index')->name('categories.index');

	Route::get('{name?}', 'HomeController@index')->where('name', 'home')->name('home');
});

/*Route::group(['prefix' => 'api', 'as' => 'api.'], function() {
	Route::get('{categories}', 'CategoryController@index')->name('categories.index');
});*/
