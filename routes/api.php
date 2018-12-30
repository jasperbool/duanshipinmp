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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('auth/login', ['as' => 'login', 'uses' => 'home\AuthenticateController@login']);

Route::post('file/upload/image', 'FileController@uploadImage')->name('upload.image');
Route::post('file/upload/images', 'FileController@uploadImages')->name('upload.images');
Route::post('file/upload/video', 'FileController@uploadVideo')->name('upload.video');

Route::group(['middleware' => ['auth.token:member']], function(){
    Route::get('video/categories', 'home\VideoCategoryController@all')->name('video.categories');
});


