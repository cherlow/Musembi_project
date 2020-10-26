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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });





Route::get('/user', 'BackendApiController@myaccount');
Route::post('/jobsearch', 'FrontEndApiController@jobsearch');
Route::post('/usersearch', 'FrontEndApiController@usersearch');
Route::post('/adduserskill', 'BackendApiController@adduserskill');
Route::post('/changeavatar', 'BackendApiController@changeavatar');
Route::post('/updateuser', 'BackendApiController@updateuser');
Route::post('/newtask', 'BackendApiController@newtask');
Route::post('/newskill', 'BackendApiController@newskill');
Route::get('/getcategories', 'FrontEndApiController@getcategories');
Route::post('/uploadtaskattachments', 'BackendApiController@uploadtaskattachments');
Route::get('/gettasks', 'FrontEndApiController@gettasks');
Route::get('/gethustlancers', 'FrontEndApiController@gethustlancers');
Route::post('/bid', 'BidController@store');
