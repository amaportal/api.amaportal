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

Route::group(['prefix'=>'api'], function() {

	Route::get('test', function() {
		$result = [
			"title" => "AMA Portal API",
			"status" => "Development",
			"response" => "Welcome to AMA Portal API. This API is for educational purposes only."
		];

		return $result;
	});

	// Departments
	Route::get('departments', 'DepartmentController@index');
	Route::get('departments/results/{results}', 'DepartmentController@index');
	Route::get('departments/{id}', 'DepartmentController@show');
	Route::get('departments/{id}/programs', 'DepartmentController@programs');
	Route::get('departments/{id}/programs/results/{results}', 'DepartmentController@programs');

	// Programs
	Route::get('programs', 'ProgramController@index');
	Route::get('programs/results/{result}', 'ProgramController@limitResults');

});
