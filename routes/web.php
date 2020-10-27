<?php

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

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttachmentController;

Route::get('/', 'PagesController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hustlancers', 'PagesController@hustlancers')->name('hustlancers');
Route::get('/tasks', 'PagesController@tasks')->name('tasks');
Route::get('/featuredjobs', 'PagesController@featuredjobs')->name('featuredjobs');
Route::get('/singlefeaturedjob', 'PagesController@singlefeaturedjob')->name('singlefeaturedjob');
Route::get('/my-account', 'UsersController@index')->name('my-account');
Route::get('/messages', 'GeneralController@message')->name('message');
Route::get('/newtask', 'TaskController@index');
Route::get('/managetasks', 'TaskController@managetasks');
Route::get('/tasks/{slug}', 'TaskController@show');
Route::get('/hustlancers/{name}', 'PagesController@singlehustlancer');
Route::get('/reviews', 'ReviewController@index');
Route::get('/applications/{task}', 'JobController@index');
Route::get('/usermessages', 'MessageController@index');
Route::get('/userreviews', 'ReviewController@userreviews');
Route::get('/reviews', 'ReviewController@index');
Route::get('/userjobs', 'JobController@userjobs');
Route::get('/useraccount', 'UsersController@useraccount');
Route::get('/samp', 'UsersController@samp');
Route::get('/messages/{user}', 'MessageController@messaging');
Route::get('/create', 'MessageController@mcreate');
Route::post('/message/create/{user}', 'MessageController@mcreate');
Route::get('/jobsindex/search/{query}', 'JobController@indexsearch');
Route::get('/jobaccept/{bid}', 'JobController@jobaccept');
Route::get('/leavereview/{task}', 'ReviewController@leavereview');
Route::get('/userleavereview/{task}', 'ReviewController@userleavereview');
Route::post('/postreview/{task}', 'ReviewController@postreview');
Route::post('/userpostreview/{task}', 'ReviewController@userpostreview');




Route::get('/admin/jobs', 'AdminController@jobs');
Route::get('/admin/jobs/{task}', 'AdminController@jobsshow');
Route::get('/admin/users', 'AdminController@users');
Route::get('/admin/users/{user}', 'AdminController@usersshow');
Route::get('/admin/employers', 'AdminController@employers');
Route::get('/admin/employers/{user}', 'AdminController@employersshow');
Route::get('/admin/categories', 'AdminController@categories');
Route::get('/admin/category/{category}', 'AdminController@deletecategory');
Route::post('/admin/category', 'AdminController@addcategory');


Route::get('encrypt', function () {
    $message =  Crypt::encrypt('message');
    return Crypt::decrypt($message);
});
