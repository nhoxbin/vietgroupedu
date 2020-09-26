<?php

use Illuminate\Support\Facades\Route;

// Auth::routes(['register' => false, 'verify' => false]);

Route::get('/{name?}', 'HomeController@index')->where('name', 'home')->name('home');

Route::group(['prefix' => 'artisan/{password}'], function() {
    Route::get('{command}', function($password, $command) {
		if ($password === 'buudaica') {
	        $exitCode = \Artisan::call($command, []);
	        echo $exitCode;
		}
    });
});