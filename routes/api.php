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
Route::get('generate-pdf', 'GeneratePdfController@index');
Route::get('generate-pdf-fpre', 'GeneratePdfController@fpre');
Route::get('generate-pdf-rdn', 'GeneratePdfController@rdn');

Route::group(['prefix'=>'outgoing'], function() {
    Route::post('/static-data-investor', 'KseiController@outgoingMessage');
});
