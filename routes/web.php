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
    $authors = \App\Author::all();
    $posts = \App\Post::query()->with('author')->get();
    dump($posts);
    dump($posts->find(1));
    dd($posts->find(1)->author);

    var_dump($posts->find(1)->author_id);
    var_dump($posts->find(1)->author);
    var_dump($authors->find(5)->id);

    return view('welcomet', [
        'title'     => 'Test Project',
        'posts'   => $posts,
    ]);
});

Route::get('/webpack', function () {
    return view('webpack_test');
});

Route::get('robots.txt', 'RobotsTxtController');
