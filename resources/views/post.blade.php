@extends('layouts.maint')

@section('title')
{{ $title }}
@endsection

@section('content')
<div class="company_post">
    <article class="post post_full" id="post_{}" lang="ru">
        <div class="post__wrapper">
            <header class="post__meta">
                <a href="{{ $post->author->link }}" class="post__user-info user-info" title="Автор публикации">
                    <img src="{{ $post->author->image }}" width="24" height="24"
                        class="user-info__image-pic user-info__image-pic_small">
                    <span class="user-info__nickname user-info__nickname_small">{{ $post->author->username }}</span>
                </a>

                <span class="post__time" data-time_published="2020-02-05T09:42Z">{{ $post->updated_at }}</span>


            </header>

            <h1 class="post__title post__title_full">
                <span class="post__title-text">{{ $post->header }}</span>
            </h1>

            <div class="post__body post__body_full">
                <div class="post__text post__text-html" id="post-content-body"
                    data-io-article-url="https://habr.com/ru/company/oleg-bunin/blog/486844/">
                    {{ $post->content }}
                </div>
            </div>

        </div>

        <div class="post-additionals post-additionals_company">
            <ul class="post-stats post-stats_post js-user_"
                data-post-type="publish_corp_ru,c_oleg-bunin,c_manychat,h_4,h_260,h_17691,f_develop"
                id="infopanel_post_486844">
                <li class="post-stats__item post-stats__item_voting-wjt">
                    <div class="voting-wjt voting-wjt_post js-post-vote" data-id="{{ $post->id }}" data-type="2">
                        <button type="button" class="btn voting-wjt__button " data-action="plus">
                            <svg class="icon-svg_arrow-up" width="10" height="16" id="vote-arrow" viewBox="0 0 15 24">
                                <path d="M6.802.129l-6.709 7.637c-.211.241-.037.615.289.615h3.629c.21 0
                                 .38.167.38.372v14.875c0 .205.169.372.379.372h4.64c.21 0 .379-.167.379-.372v-14.876c0-.205.17-.372.38-.372h3.63c.325 0
                                 .5-.373.289-.615l-6.709-7.637c-.153-.171-.427-.171-.578.001z">
                                </path>
                            </svg>
                        </button>

                        <span class="voting-wjt__counter  voting-wjt__counter_positive  js-score"
                            onclick="posts_vote_result(33, 30, 3)" title="Всего голосов {{ $post->rating }}">{{ $post->rating }}</span>

                        <button type="button" class="btn voting-wjt__button " data-action="minus">
                            <svg class="icon-svg_arrow-down" width="10" height="16" id="vote-arrow" viewBox="0 0 15 24">
                                <path d="M6.802.129l-6.709 7.637c-.211.241-.037.615.289.615h3.629c.21 0
                                 .38.167.38.372v14.875c0 .205.169.372.379.372h4.64c.21 0 .379-.167.379-.372v-14.876c0-.205.17-.372.38-.372h3.63c.325
                                  0 .5-.373.289-.615l-6.709-7.637c-.153-.171-.427-.171-.578.001z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </li>

                <li class="post-stats__item post-stats__item_bookmark">
                    <button type="button" class="btn bookmark-btn bookmark-btn_post "
                        data-post-type="publish_corp_ru,c_oleg-bunin,c_manychat,h_4,h_260,h_17691,f_develop"
                        data-type="2" data-id="486844" data-action="add"
                        title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                        onclick="posts_add_to_favorite(this);" disabled="">
                        <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                <use xlink:href="https://habr.com/images/1580983216/common-svg-sprite.svg#book"></use>
                            </svg><span class="bookmark__counter js-favs_count"
                                title="Количество пользователей, добавивших публикацию в закладки">57</span></span>
                    </button>
                </li>

                <li class="post-stats__item post-stats__item_views">
                    <div class="post-stats__views" title="Количество просмотров">
                        <svg class="icon-svg_views-count" width="21" height="12">
                            <use xlink:href="https://habr.com/images/1580983216/common-svg-sprite.svg#eye"></use>
                        </svg><span class="post-stats__views-count">4,7k</span>
                    </div>
                </li>

                <li class="post-stats__item post-stats__item_comments">
                    <a href="https://habr.com/ru/company/oleg-bunin/blog/486844/#comments"
                        class="post-stats__comments-link" rel="nofollow">
                        <svg class="icon-svg_post-comments" width="16" height="16">
                            <use xlink:href="https://habr.com/images/1580983216/common-svg-sprite.svg#comment"></use>
                        </svg><span class="post-stats__comments-count" title="Читать комментарии">10</span>
                    </a>
                </li>
            </ul>

            <div class="company-info company-info_post-additional">

                <div class="company-info__author">
                    <div class="user-info">
                        <div class="user-info__stats">
                            <div class="media-obj media-obj_user-info">
                                <a href="{{ $post->author->link }}" class="media-obj__image">
                                    <img src="{{ $post->author->image }}"
                                        width="48" height="48" class="media-obj__image-pic media-obj__image-pic_user">
                                </a>
                            </div>
                        </div>

                        <div class="user-info__about">
                            <div class="user-info__links">
                                <a href="{{ $post->author->link }}" class="user-info__fullname">
                                    {{ $post->author->fullName }}
                                </a>&nbsp;
                                <a href="{{ $post->author->link }}" class="user-info__nickname user-info__nickname_doggy">
                                    {{ $post->author->username }}
                                </a>
                            </div>

                            <div class="user-info__specialization">Пользователь</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
@endsection
