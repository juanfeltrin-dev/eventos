<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Auth')->group(function() {
    Route::post('auth/login', 'AuthController@login');
});

//Route::middleware(['check.token', 'auth:api'])->group(function () {
    Route::namespace('Auth')->group(function() {
        Route::post('me', 'AuthController@me');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
    });

    Route::namespace('Admin')->group(function() {
        Route::prefix('event')->group(function() {
            Route::post('/', 'EventController@store');
            Route::get('/', 'EventController@index');
        });

        Route::prefix('category')->group(function() {
            Route::get('/', 'CategoryController@index');
        });

        Route::prefix('age')->group(function() {
            Route::get('/', 'AgeController@index');
        });

        Route::prefix('state')->group(function() {
            Route::get('/', 'StateController@index');
        });

        Route::prefix('city')->group(function() {
            Route::get('/state/{state}', 'CityController@index');
        });
//    });
});
