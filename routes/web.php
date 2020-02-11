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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/webpack', function () {
//    return view('webpack_test');
//});
//
//Route::get('robots.txt', 'RobotsTxtController');



Route::get('/posts/{rule}', 'PostsController@showPosts')->where('rule', 'all|top\d+');

Route::get('/posts/{id}', 'PostsController@show');

Route::post('/posts/{id}/{action}', 'PostsController@ratingAction');
