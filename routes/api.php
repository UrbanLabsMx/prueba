<?php

use Illuminate\Http\Request;

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


Route::apiResource('states', 'API\StateController');
Route::apiResource('municipalities', 'API\MunicipalityController');
Route::apiResource('users', 'API\UserController');
Route::apiResource('useradmins', 'API\UserAdminController');
