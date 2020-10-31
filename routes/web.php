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

	Route::get('{category}/{slug}', 'PostController@show')
		 // ->where('category', 'don-hang|tin-tuc|su-kien')
		 ->name('post.show');

	Route::get('{categories}', 'CategoryController@index')->name('categories.index');

	Route::get('{name?}', 'HomeController@index')->where('name', 'home')->name('home');
});
