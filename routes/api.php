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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Employees
Route::group(['namespace' => 'Api\Employee', 'prefix' => 'employees'], function () {
    Route::get('/', 'ListController');
    Route::get('/{employee}', 'FetchController')->where(['employee' => '[1-9][0-9]*']);
    Route::post('/', 'CreateController');
    Route::delete('/{employee}', 'DeleteController')->where(['employee' => '[1-9][0-9]*']);
});
