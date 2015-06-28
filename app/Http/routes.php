<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

Route::get('/', function () {
    return "Welcome";
});

Route::get('/api/testing', function() {
	return "this is just testing";
});

Route::group(['prefix'=>'api'], function() {

	Route::get('test', function() {
		$result = [
			"title" => "AMA Portal API",
			"status" => "Development",
			"response" => "Welcome to AMA Portal API. This API is for educational purposes only."
		];

		return $result;
	});

});
