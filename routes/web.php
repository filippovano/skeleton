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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ru/hub/php/all/', function () {
    return view('welcomet', ['title' => 'Test Project']);
});

Route::get('/webpack', function () {
    return view('webpack_test');
});

Route::get('robots.txt', 'RobotsTxtController');
