@extends('layouts.maint')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="tabs">
        <div class="tabs__level tabs__level_bottom">
            <ul class="toggle-menu ">
                <li class="toggle-menu__item">
                    <a href="https://habr.com/ru/hub/php/all/"
                        class="toggle-menu__item-link toggle-menu__item-link_active" rel="nofollow"
                        title="Все публикации в хронологическом порядке">
                        Без порога


                    </a>
                </li>
                <li class="toggle-menu__item">
                    <a href="https://habr.com/ru/hub/php/top10/" class="toggle-menu__item-link " rel="nofollow"
                        title="Все публикации с рейтингом 10 и выше">
                        ≥10
                    </a>
                </li>
                <li class="toggle-menu__item">
                    <a href="https://habr.com/ru/hub/php/top25/" class="toggle-menu__item-link " rel="nofollow"
                        title="Все публикации с рейтингом 25 и выше">
                        ≥25
                    </a>
                </li>
                <li class="toggle-menu__item">
                    <a href="https://habr.com/ru/hub/php/top50/" class="toggle-menu__item-link " rel="nofollow"
                        title="Все публикации с рейтингом 50 и выше">
                        ≥50
                    </a>
                </li>
                <li class="toggle-menu__item">
                    <a href="https://habr.com/ru/hub/php/top100/" class="toggle-menu__item-link " rel="nofollow"
                        title="Все публикации с рейтингом 100 и выше">
                        ≥100
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="posts_list">
        <ul class="content-list shortcuts_items">
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
                            <span class="post__time">сегодня в 12:42</span>
                        </header>
                        <p>{{ $post->header }} {{ $post->rating }}</p>
                    </article>
                </li>
            @endforeach
        </ul>
    </div>
@endsection