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

Route::get('/', function () {
    return view('welcome');
});

/* If you want to overwrite a route of the resource, you need to put it before the route resource
in this case we're taking the route /posts that is related to index method to / which is now also related to index method */
Route::get('/', 'PostController@index');
/* With except you can define which routes you don't want to generate, in this case we don't need a /posts route for index method because we defined / for this method.
You can list your routes with and without the except to see the difference */
Route::resource('posts', 'PostController');

/*->except([
    'index',
]);*/