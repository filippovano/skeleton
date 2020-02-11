<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use function typeOf;

class PostsController extends Controller
{
    /**
     * Показать посты.
     *
     * @param  Request  $request
     * @param  string $rule
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPosts(Request $request, $rule)
    {
        define("PER_PAGE", 5);

        $page = $request->get('page');
        $page = (isset($page))? intval($page) : 1;

        if ($rule == 'all') {
            $title = "Все посты";

            $ratingValue = 0;

            $posts = Post::query()->forPage($page, PER_PAGE)->get();

            $countPosts = Post::query()->count();
        } else {
            $ratingValue = substr($rule, 3);

            $title = "Рейтинг больше {$ratingValue}";

            $posts = Post::query()
                ->where('rating', '>', $ratingValue)
                ->orderBy('rating', 'desc')
                ->forPage($page, PER_PAGE)
                ->get();

            $countPosts = Post::query()
                ->where('rating', '>', $ratingValue)
                ->count();
        }

        $countPages = intval(ceil($countPosts / PER_PAGE));

        return view('posts', [
            'title'         => $title,
            'ratingValue'   => $ratingValue,
            'posts'         => $posts,
            'page'          => $page,
            'countPages'    => $countPages,
        ]);
    }

    /**
     * Показать пост с id.
     *
     * @param int id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function show($id)
    {
        $post = Post::query()->find($id);

        if (!isset($post)) {
            throw(new \ErrorException('Такого поста не существует'));
        }

        return view('post', [
            'title'     => "Пост \"{$post->header}\"",
            'post'      => $post,
        ]);
    }

    /**
     * Изменение рейтинга поста с id.
     *
     * @param int $id
     * @param string $action
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function ratingAction($id, $action)
    {
        $post = Post::query()->find($id);

        if (!isset($post)) {
            throw(new \Exception('Такого поста не существует'));
        }

        if ($action === 'plus') {
            $post->rating += 1;
        } else {
            $post->rating -= 1;
        }

        $post->save();

        return response()->json([
            'rating' => $post->rating,
        ]);
    }
}
