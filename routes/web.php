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
    // $authors = \App\Models\Author::all();
    $posts = \App\Models\Post::all();
    dump($posts);
    $posts = \App\Models\Post::paginate(5);
    dd($posts);
    // $posts = \App\Models\Post::query()->with('author')->get();
    // dump($posts);
    // dump($posts->find(1));
    // dd($posts->find(1)->author);

    // var_dump($posts->find(1)->author_id);
    // var_dump($posts->find(1)->author);
    // var_dump($authors->find(5)->id);

    return view('welcomet', [
        'title'     => 'Test Project',
        'posts'   => $posts,
    ]);
});

Route::get('/ru/hub/php/top10/', function () {
//    $posts = \App\Models\Post::all();
    $posts = \App\Models\Post::orderBy('rating', 'desc')
        ->take(10)
        ->get();

//    dump($posts);
//        ->paginate(10);

    $posts = new \Illuminate\Pagination\LengthAwarePaginator(
        $posts->toArray(),
        $posts->count(),
        5);
    $posts->setPath("http://skeleton.test/ru/hub/php/top10");
//    dd($posts);

    return view('welcomet', [
        'title'     => 'Test Project',
        'posts'   => $posts,
    ]);
});

Route::get('/ru/posts/{id}', function ($id) {
    $post = App\Models\Post::find($id);
    return view('post', [
        'title'     => 'Post',
        'post'   => $post,
    ]);
});

Route::post('/posts/{id}/plus', function ($id) {
    $post = \App\Models\Post::find($id);
    $post->rating += 1;
    $post->save();

    return response($post->rating, 200)
        ->header('Content-Type', 'text/plain');
});

Route::post('/posts/{id}/minus', function ($id) {
    $post = \App\Models\Post::find($id);
    $post->rating -= 1;
    $post->save();

    return response($post->rating, 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/webpack', function () {
    return view('webpack_test');
});

Route::get('robots.txt', 'RobotsTxtController');
