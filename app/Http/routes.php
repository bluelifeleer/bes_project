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

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

/**
 * 添加api路由群组
 * @author junmei <thebulelife@outlook.com>
 * @date 2016-10-11
 */
Route::group(['prefix' => 'api'], function () {
	Route::post('bes/creative/add', 'CreativesController@add');
	Route::post('bes/creative/update', 'CreativesController@update');
	Route::get('bes/creative/get/{ids}', 'CreativesController@get');
	Route::get('bes/creative/getAll/{startDate}/{endDate}', 'CreativesController@getAll');
	Route::get('bes/creative/queryAuditState/{ids}', 'CreativesController@queryAuditState');
	Route::post('bes/advertiser/add', 'AdvertiserController@add');
	Route::post('bes/advertiser/update', 'AdvertiserController@update');
	Route::get('bes/advertiser/get/{ids}', 'AdvertiserController@get');
	Route::get('bes/advertiser/getAll/{startDate}/$endDate}', 'AdvertiserController@getAll');
	Route::get('bes/advertiser/queryQualification/{ids}', 'AdvertiserController@queryQualification');
});

Route::group(['prefix' => 'users'], function () {
	Route::get('/get', 'UsersController@logon');
	Route::get('/get', 'UsersController@login');
	Route::get('/get', 'UsersController@registe');
});