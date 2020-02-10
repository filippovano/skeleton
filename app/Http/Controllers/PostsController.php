<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Показать все посты.
     *
     * @param  null
     * @return Response
     */
    public function showAll()
    {
        $posts = \App\Models\Post::paginate(5);

        return view('posts', [
            'title'     => 'Все посты',
            'n'         => 0,
            'posts'     => $posts,
        ]);
    }

    /**
     * Показать ТОП N постов.
     *
     * @param  int n
     * @return Response
     */
    public function showRatingGreater($n)
    {
        $posts = \App\Models\Post::where('rating', '>', $n)->orderBy('rating', 'desc')->get();

        $page = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage('page');

        $posts = new \Illuminate\Pagination\LengthAwarePaginator(
            $posts->forPage($page, 5),
            $posts->count(),
            5);
        $posts->setPath("http://skeleton.test/posts/top{$n}");

        return view('posts', [
            'title'     => "Рейтинг больше {$n}",
            'n'         => $n,
            'posts'     => $posts,
        ]);
    }

    /**
 * Показать пост с id.
 *
 * @param  int id
 * @return Response
 */
    public function show($id)
    {
        $post = \App\Models\Post::find($id);

        return view('post', [
            'title'     => "Пост \"{$post->header}\"",
            'post'      => $post,
        ]);
    }

    /**
     * Увеличение рейтинга поста с id.
     *
     * @param  int id
     * @return Response
     */
    public function ratingPlus($id)
    {
        $post = \App\Models\Post::find($id);
        $post->rating += 1;
        $post->save();

        return response($post->rating, 200)
            ->header('Content-Type', 'text/plain');
    }

    /**
     * Уменьшение рейтинга поста с id.
     *
     * @param  int id
     * @return Response
     */
    public function ratingMinus($id)
    {
        $post = \App\Models\Post::find($id);
        $post->rating -= 1;
        $post->save();

        return response($post->rating, 200)
            ->header('Content-Type', 'text/plain');
    }
}
