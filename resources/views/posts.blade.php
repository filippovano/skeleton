<?
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts */
?>
@extends('layouts.maint')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="tabs">
        <div class="tabs__level tabs__level_bottom">
            <ul class="toggle-menu ">
                @foreach([0, 10, 25, 50, 100] as $rating)
                    <li class="toggle-menu__item">
                        <a href="/posts/@if($rating == 0)all/@else{{'top' . $rating }}@endif"
                            class="toggle-menu__item-link @if ($ratingValue == $rating) toggle-menu__item-link_active @endif"
                            rel="nofollow"
                            title=@if($rating == 0)"Все публикации в хронологическом порядке"@else"Все публикации с рейтингом {{ $rating }} и выше"@endif>
                            @if ($rating == 0)Без порога@else≥{{ $rating }}@endif</a>
                    </li>
                @endforeach
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
                            <a href="/posts/{{ $post->id }}" class="post__title_link">
                                {{ $post->header }}
                            </a>
                        </h2>

                        <div class="post__body post__body_crop ">
                            <div class="post__text post__text-html">
                                    {{ explode('.', $post->content)[0] }}
                            </div>

                            <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                                href="/posts/{{ $post->id }}">
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
                                            title="{{ $post->rating }}">{{ $post->rating }}</span>
                                    </div>
                                </li>
                                <li class="post-stats__item post-stats__item_comments">
                                </li>
                            </ul>
                        </footer>

                    </article>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="page__footer">
        <ul class="arrows-pagination">
            <li class="arrows-pagination__item">
                @if($page != 1)
                    <a title="На страницу назад (Alt + ←)"
                        class="arrows-pagination__item-link arrows-pagination__item-link_prev" id="previous_page"
                        href="/posts/@if($ratingValue == 0){{ 'all' }}@else{{ 'top' . $ratingValue }}@endif{{ '' }}@if($page != 2)?page={{ $page - 1 }}@endif"
                        rel="">
                        <span>←&nbsp;сюда</span>
                    </a>
                @else
                    <span class="arrows-pagination__item-link">←&nbsp;сюда</span>
                @endif
            </li>
            <li class="arrows-pagination__item">
                @if($page != $countPages)
                    <a title="На страницу назад (Alt + ←)"
                        class="arrows-pagination__item-link arrows-pagination__item-link_prev" id="previous_page"
                        href="/posts/@if($ratingValue == 0){{ 'all' }}@else{{ 'top' . $ratingValue }}@endif?page={{ $page + 1 }}" rel="">
                        <span>туда&nbsp;→</span>
                    </a>
                @else
                    <span class="arrows-pagination__item-link">туда&nbsp;→</span>
                @endif
            </li>
        </ul>

        <ul class="toggle-menu toggle-menu_pagination" id="nav-pagess">
            @for ($i = 1; $i <= $countPages; ++$i)
                <li class="toggle-menu__item toggle-menu__item_pagination">
                    <a href="/posts/@if($ratingValue == 0){{ 'all' }}@else{{ 'top' . $ratingValue }}@endif{{ '' }}@if($i != 1)?page={{ $i }}@endif"
                       class="toggle-menu__item-link toggle-menu__item-link_pagination @if($page == $i)toggle-menu__item-link_active @endif">
                        {{ $i }}
                    </a>
                </li>
            @endfor
        </ul>
    </div>

@endsection
