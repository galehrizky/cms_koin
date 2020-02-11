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

Route::middleware('auth:api')->get('/', function (Request $request) {
    return $request->user();
});

Route::get('/news_ads', 'Api\NewsAdsApi@Api_get_list');
Route::get('/category', 'Api\NewsAdsApi@Category');
Route::get('/get_by_id/{id}', 'Api\NewsAdsApi@getNewsByid');
Route::post('/umroh/add', 'Api\NewsAdsApi@add_umroh');
