<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'LoginController@index');

Route::get('coach', 'CoachController@cList');
Route::get('building', 'BuildingController@cList');

Route::get('sys', function() {
    return view('sysLogin');
});

Route::get('login', function() {
    return view('login');
});

Route::get('sign', function() {
    return view('sign');
});
Route::post('sign/up', 'CustomerController@signup');
Route::post('check', 'LoginController@check');

Route::post('sysLogin', 'SysLoginController@check');

Route::group(['middleware' => 'auth'], function() {
    Route::get('logout', 'LoginController@logout');
    Route::get('coach/select/{id}', 'CoachController@select');
    Route::get('building/select/{id}', 'BuildingController@select');
});

Route::group(['middleware' => 'auth.sys'], function() {
    Route::group(['prefix' => 'sys'], function() {
        Route::get('index', function() {
            return view('sysIndex');
        });
        Route::get('logout', 'SysLoginController@logout');

        Route::group(['prefix' => 'coach'], function() {
            Route::get('index', 'CoachController@index');
            Route::get('add', 'CoachController@add');
            Route::post('store', 'CoachController@store');
            Route::get('edit/{id}', 'CoachController@edit');
            Route::post('update/{id}', 'CoachController@update');
            Route::get('delete/{id}', 'CoachController@delete');
        });

        Route::group(['prefix' => 'building'], function() {
            Route::get('index', 'BuildingController@index');
            Route::get('add', 'BuildingController@add');
            Route::post('store', 'BuildingController@store');
            Route::get('edit/{id}', 'BuildingController@edit');
            Route::post('update/{id}', 'BuildingController@update');
            Route::get('delete/{id}', 'BuildingController@delete');
        });

        Route::get('customer/list', 'CustomerController@list');
    });
});