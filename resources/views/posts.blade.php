@extends('layouts.maint')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="tabs">
        <div class="tabs__level tabs__level_bottom">
            <ul class="toggle-menu ">
                <li class="toggle-menu__item">
                    <a href="http://skeleton.test/posts/all/"
                        class="toggle-menu__item-link @if ($n == 0) toggle-menu__item-link_active @endif" rel="nofollow"
                        title="Все публикации в хронологическом порядке">
                        Без порога
                    </a>
                </li>
                <li class="toggle-menu__item">
                    <a href="http://skeleton.test/posts/top10/"
                       class="toggle-menu__item-link @if ($n == 10) toggle-menu__item-link_active @endif" rel="nofollow"
                       title="Все публикации с рейтингом 10 и выше">
                        ≥10
                    </a>
                </li>
                <li class="toggle-menu__item">
                    <a href="http://skeleton.test/posts/top25/"
                       class="toggle-menu__item-link @if ($n == 25) toggle-menu__item-link_active @endif" rel="nofollow"
                       title="Все публикации с рейтингом 25 и выше">
                        ≥25
                    </a>
                </li>
                <li class="toggle-menu__item">
                    <a href="http://skeleton.test/posts/top50/"
                       class="toggle-menu__item-link @if ($n == 50) toggle-menu__item-link_active @endif" rel="nofollow"
                       title="Все публикации с рейтингом 50 и выше">
                        ≥50
                    </a>
                </li>
                <li class="toggle-menu__item">
                    <a href="http://skeleton.test/posts/top100/"
                       class="toggle-menu__item-link @if ($n == 100) toggle-menu__item-link_active @endif" rel="nofollow"
                       title="Все публикации с рейтингом 100 и выше">
                        ≥100
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="posts_list">
        <ul class="content-list shortcuts_items container">
            @foreach ($posts as $post)
                <li class="content-list__item content-list__item_post shortcuts_item" id="post_{{ $post->id }}">
                    <article class="post post_preview" lang="ru">
                        <header class="post__meta">
                            <a href="{{ $post->author->link }}" class="post__user-info user-info"
                                title="Автор публикации">
                                <img src="{{ $post->author->image }}"
                                    width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                                <span class="user-info__nickname user-info__nickname_small">{{ $post->author->username }}</span>
                            </a>
                            <span class="post__time">{{ $post->updated_at }}</span>
                        </header>

                        <h2 class="post__title">
                            <a href="http://skeleton.test/posts/{{ $post->id }}" class="post__title_link">
                                {{ $post->header }}
                            </a>
                        </h2>

                        <div class="post__body post__body_crop ">
                            <div class="post__text post__text-html">
                                {{ $post->content }}
                            </div>

                            <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                                href="http://skeleton.test/posts/{{ $post->id }}">
                                Читать дальше &rarr;
                            </a>
                        </div>

                        <footer class="post__footer">
                            <ul class="post-stats  js-user_"
                                data-post-type="publish_corp_ru,c_oleg-bunin,c_manychat,h_4,h_260,h_17691,f_develop"
                                id="infopanel_post_486844">
                                <li class="post-stats__item">
                                    <div class="post-stats__result">

                                        <span class="post-stats__result-icon">
                                            <svg class="icon-svg_votes" width="10" height="16">
                                                <use
                                                    xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                                </svg>
                                        </span>

                                        <span class="post-stats__result-counter voting-wjt__counter_positive "
                                            title="Всего голосов 11: &uarr;11 и &darr;0">{{ $post->rating }}</span>
                                    </div>
                                </li>
                                <li class="post-stats__item post-stats__item_bookmark">
                                    <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                        data-post-type="publish_corp_ru,c_oleg-bunin,c_manychat,h_4,h_260,h_17691,f_develop"
                                        data-type="2" data-id="486844" data-action="add"
                                        title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                        onclick="posts_add_to_favorite(this);" disabled>
                                        <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                                <use
                                                    xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                                </svg><span class="bookmark__counter js-favs_count"
                                                title="Количество пользователей, добавивших публикацию в закладки">0</span></span>
                                    </button>
                                </li>

                                <li class="post-stats__item post-stats__item_views">
                                    <div class="post-stats__views" title="Количество просмотров">
                                        <svg class="icon-svg_views-count" width="21" height="12">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                            </svg><span class="post-stats__views-count">0</span>
                                    </div>
                                </li>

                                <li class="post-stats__item post-stats__item_comments">
                                    <a href="https://habr.com/ru/company/badoo/blog/487234/#comments" class="post-stats__comments-link" rel="nofollow">
                                        <svg class="icon-svg_post-comments" width="16" height="16">
                                            <use xlink:href="https://habr.com/images/1580983216/common-svg-sprite.svg#comment"></use>
                                        </svg>
                                        <span class="post-stats__comments-count" title="Читать комментарии">0</span>
                                    </a>
                                </li>
                            </ul>
                        </footer>

                    </article>
                </li>
            @endforeach
        </ul>
    </div>

    {{ $posts->links() }}
@endsection
