<div class="content_left js-content_left">
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
            <li class="content-list__item content-list__item_post shortcuts_item" id="post_486844">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/olegbunin/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/fdb/8a5/6e3/fdb8a56e3bbf010b012a4eb597cdf134.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">olegbunin</span>
                        </a>
                        <span class="post__time">сегодня в 12:42</span>
                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/company/oleg-bunin/blog/486844/" class="post__title_link">Эволюция
                            обработки вебхуков Facebook: с нуля до 25 000 в секунду</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/company/oleg-bunin/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Блог компании Конференции Олега Бунина (Онтико)'); }">Блог
                                компании Конференции Олега Бунина (Онтико)</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/company/manychat/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Блог компании ManyChat'); }">Блог
                                компании ManyChat</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/hi/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Высокая производительность'); }">Высокая
                                производительность</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/facebook_api/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Facebook API'); }">Facebook
                                API</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">Скорее всего, рассказывать, что такое вебхуки (webhooks)
                            — никому не нужно. Но на всякий случай: вебхуки — это механизм оповещения о событиях во
                            внешней системе. Например, о покупке в интернет-магазине через онлайн-кассу, отправке кода в
                            GitHub-репозиторий или действиях пользователей в чатах. В типичном API нужно постоянно
                            опрашивать сервер, написал ли пользователь что-нибудь в чате. С помощью механизма вебхуков
                            можно «подписаться» на оповещения, и сервер сам отправит HTTP-запрос, когда произойдет
                            событие. Это удобнее и быстрее, чем постоянно запрашивать новые данные на сервере.<br>
                            <br>
                            <img src="https://habrastorage.org/webt/t8/xp/4l/t8xp4lbyixxglmd2wlzdjkzgrbk.jpeg"><br>
                            <br>
                            ManyChat — это платформа, которая помогает бизнесу общаться со своими клиентами через чаты в
                            мессенджерах. Вебхуки — одна из важных частей ManyChat, потому что именно через них бизнес
                            общается с клиентами. А общаются они много — например, через систему бизнесы отправляют
                            своим клиентам миллиарды сообщений в месяц.<br>
                            <br>
                            Основная масса сообщений отправляется через Facebook Messenger. У него есть особенность —
                            медленный API. Когда клиент пишет сообщение, чтобы заказать пиццу, Facebook отправляет в
                            ManyChat вебхук. Платформа его обрабатывает, отправляет запрос обратно и пользователь
                            получает сообщение. Из-за медленного API некоторые запросы идут несколько секунд. Но когда
                            платформа долго не отвечает, бизнес теряет клиента, а Facebook может отключить приложение от
                            вебхуков.<br>
                            <br>
                            Поэтому обработка вебхуков — это одна из главных инженерных задач платформы. Чтобы решить
                            проблему, в ManyChat за три года работы несколько раз меняли архитектуру обработки с
                            простого контроллера в Yii до распределенной системы с «Галактиками». Подробнее об этом под
                            катом расскажет Дмитрий Кушников (<a href="https://habr.com/ru/users/cancellarius/"
                                class="user_link">cancellarius</a>).<br></div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/company/oleg-bunin/blog/486844/#habracut">Читать дальше &rarr;</a>
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
                                        title="Всего голосов 11: &uarr;11 и &darr;0">+11</span>
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
                                            title="Количество пользователей, добавивших публикацию в закладки">18</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">885</span>
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

            <li class="content-list__item content-list__item_news-block shortcuts_item">
                <div class="new-block">
                    <div class="news-block__header">
                        <h3 class="news-block__title">Новости</h3>
                    </div>
                    <div class="news-block__content">
                        <ul class="content-list">
                            <li class="content-list__item content-list__item_news-topic">
                                <div class="news-topic">
                                    <a href="https://habr.com/ru/company/JetBrains/news/t/478030/"
                                        class="news-topic__title"
                                        onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'title'); }">PhpStorm
                                        2019.3: поддержка PHP 7.4, PSR-12, WSL, MongoDB и многое другое</a>
                                    <div class="news-topic__attrs">
                                        <span class="news-topic__attr news-topic__attr_date-time">29 ноября 2019 в
                                            13:05</span>
                                        <a href="https://habr.com/ru/company/JetBrains/news/t/478030/#comments"
                                            class="news-topic__attr news-topic__attr_comments"
                                            onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'comments'); }">Комментарии:
                                            48</a>

                                    </div>
                                </div>
                            </li>
                            <li class="content-list__item content-list__item_news-topic">
                                <div class="news-topic">
                                    <a href="https://habr.com/ru/news/t/477482/" class="news-topic__title"
                                        onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'title'); }">Крутые
                                        доклады, пицца и викторина: приглашаем на Поволжский PHP-митап</a>
                                    <div class="news-topic__attrs">
                                        <span class="news-topic__attr news-topic__attr_date-time">26 ноября 2019 в
                                            10:13</span>
                                        <a href="https://habr.com/ru/news/t/477482/#comments"
                                            class="news-topic__attr news-topic__attr_comments"
                                            onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'comments'); }">Комментарии:
                                            0</a>

                                    </div>
                                </div>
                            </li>
                            <li class="content-list__item content-list__item_news-topic">
                                <div class="news-topic">
                                    <a href="https://habr.com/ru/news/t/473414/" class="news-topic__title"
                                        onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'title'); }">Выявлена
                                        уязвимость PHP 7, которая помогает перехватывать контроль над
                                        NGINX-серверами</a>
                                    <div class="news-topic__attrs">
                                        <span class="news-topic__attr news-topic__attr_date-time">28 октября 2019 в
                                            15:27</span>
                                        <a href="https://habr.com/ru/news/t/473414/#comments"
                                            class="news-topic__attr news-topic__attr_comments"
                                            onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'comments'); }">Комментарии:
                                            30</a>

                                    </div>
                                </div>
                            </li>
                            <li class="content-list__item content-list__item_news-topic">
                                <div class="news-topic">
                                    <a href="https://habr.com/ru/news/t/468617/" class="news-topic__title"
                                        onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'title'); }">PHP
                                        Microservice Framework Swoft — 2.0.6 Officially Released</a>
                                    <div class="news-topic__attrs">
                                        <span class="news-topic__attr news-topic__attr_date-time">24 сентября 2019 в
                                            06:44</span>
                                        <a href="https://habr.com/ru/news/t/468617/#comments"
                                            class="news-topic__attr news-topic__attr_comments"
                                            onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'comments'); }">Комментарии:
                                            0</a>

                                    </div>
                                </div>
                            </li>
                            <li class="content-list__item content-list__item_news-topic">
                                <div class="news-topic">
                                    <a href="https://habr.com/ru/news/t/462927/" class="news-topic__title"
                                        onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'title'); }">PHP
                                        microservices framework — Swoft 2.0.5 published</a>
                                    <div class="news-topic__attrs">
                                        <span class="news-topic__attr news-topic__attr_date-time">8 августа 2019 в
                                            09:28</span>
                                        <a href="https://habr.com/ru/news/t/462927/#comments"
                                            class="news-topic__attr news-topic__attr_comments"
                                            onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'comments'); }">Комментарии:
                                            0</a>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="news-block__footer">
                        <a href="https://habr.com/ru/news/" classs="news-block__footer-link"
                            onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'news_hub', 'all_news'); }">Все
                            новости</a>
                    </div>
                </div>
            </li>







            <li class="content-list__item content-list__item_post shortcuts_item" id="post_486738">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/mepihin/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/f9c/922/1db/f9c9221dbf280e164a8461bb7033baf5.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">mepihin</span>
                        </a>

                        <span class="post__time">3 февраля 2020 в 12:46</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/486738/" class="post__title_link">PHP Code Style
                            Conventions</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/complete_code/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Совершенный код'); }">Совершенный
                                код</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">
                            <p>В данной статье рассматривается подход к написанию и оформлению PHP кода. Нижеизложенные
                                моменты были сформированы путем анализа существующих подходов компаний и личного опыта.
                            </p>
                        </div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/post/486738/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_" data-post-type="publish_ugc_ru,h_260,h_524,f_develop"
                            id="infopanel_post_486738">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter  voting-wjt__counter_negative"
                                        title="Всего голосов 17: &uarr;7 и &darr;10">–3</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_260,h_524,f_develop" data-type="2" data-id="486738"
                                    data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">13</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">2k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/486738/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">28</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_486714">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/tioffs/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/fbd/931/a65/fbd931a65c1dc2493c222374fcfc2df4.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">tioffs</span>
                        </a>

                        <span class="post__time">3 февраля 2020 в 10:23</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/486714/" class="post__title_link">Instagram api на
                            минималках</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/api/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'API'); }">API</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/social_networks/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Социальные сети и сообщества'); }">Социальные
                                сети и сообщества</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list">
                        <li class="inline-list__item inline-list__item_post-type"><a href="https://habr.com/ru/sandbox/"
                                class="post__type-label" title="Перейти в песочницу">Из песочницы</a></li>
                    </ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html"><img
                                src="https://habrastorage.org/webt/1s/vf/ci/1svfciotfmi1cn3nyrdc5_leypq.jpeg"
                                alt="image" /><br />
                            <br />
                            Все началось с того, что я захотел сделать канал в инстаграме потратив на поиски и тесты
                            сервисов авто публикаций целый день, далее я решил посмотреть на готовые пакеты гитхаба я
                            удивился на размер кода этих пакетов (некоторые фреймворки php меньше чем эти обертки над
                            инстаграмом), я плюнул и решил написать свою обертку с минимальными возможностями.<br />
                        </div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/post/486714/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_"
                            data-post-type="publish_ugc_ru,h_260,h_17690,h_21924,f_develop,f_geektimes"
                            id="infopanel_post_486714">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 13: &uarr;10 и &darr;3">+7</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_260,h_17690,h_21924,f_develop,f_geektimes"
                                    data-type="2" data-id="486714" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">79</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">7,7k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/486714/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">18</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_480020">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/Hackerook/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/bb9/cac/55f/bb9cac55f51010a2f5b384804b556a30.png"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">Hackerook</span>
                        </a>

                        <span class="post__time">31 января 2020 в 01:06</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/480020/" class="post__title_link">Разработка приложений и
                            Blue-Green deployment, опираясь на методологию The Twelve-Factor App с примерами на php и
                            docker</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/webdev/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Разработка веб-сайтов'); }">Разработка
                                веб-сайтов</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/saas/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'SaaS / S+S'); }">SaaS
                                / S+S</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/laravel/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Laravel'); }">Laravel</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/devops/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'DevOps'); }">DevOps</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list">
                        <li class="inline-list__item inline-list__item_post-type"><span class="post__type-label"
                                title="Обучающий материал">Tutorial</span></li>
                    </ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html"><img
                                src="https://habrastorage.org/webt/jz/f1/a4/jzf1a4my1v1ey6jeqibn8m6npj0.png"><br>
                            <br>
                            <h3>Для начала немного теории. Что такое <a href="https://12factor.net/ru/">The
                                    Twelve-Factor App</a>?</h3><br>
                            Простыми словами, это документ призванный упростить разработку SaaS приложений, помогает тем
                            что, осведомляет разработчиков и DevOps инженеров о проблемах \ практиках которые чаще всего
                            встречались в разработке современных приложений. <br>
                            <br>
                            Документ сформирован разработчиками платформы Heroku.<br>
                            <br>
                            Методология двенадцати факторов(The Twelve-Factor App) может быть применена для приложений,
                            написанных на любом языке программирования и использующих любые комбинации сторонних служб
                            (backing services) (базы данных, очереди сообщений, кэш-памяти, и т.д.).<br>
                        </div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/post/480020/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_"
                            data-post-type="publish_ugc_ru,h_91,h_260,h_12365,h_18812,h_20788,f_develop,f_admin"
                            id="infopanel_post_480020">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 8: &uarr;7 и &darr;1">+6</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_91,h_260,h_12365,h_18812,h_20788,f_develop,f_admin"
                                    data-type="2" data-id="480020" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">46</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">2,1k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/480020/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">5</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>


            <li class="content-list__item content-list__item_post shortcuts_item">
                <div class="default-block">
                    <div class="default-block__header">
                        <h2 class="default-block__header-title">Рекомендуем</h2>
                        <a href="https://tmtm.ru/megapost" class="default-block__header-link" rel="nofollow"
                            onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'megapost_promo', 'order'); }">Разместить</a>
                    </div>
                    <div class="default-block__content">
                        <ul class="megapost-teasers">
                            <li class="megapost-teasers__item teaser">
                                <a href="https://u.tmtm.ru/busines_itelon_promo" target="_blank" class="teaser__image"
                                    onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'megapost_promo', 'article_pic'); }"
                                    rel="nofollow">
                                    <img src="https://habrastorage.org/getpro/tmtm/pictures/d19/753/cd7/d19753cd723472bda3044d8cf698cd9c.png"
                                        class="teaser__image-pic" />
                                    <div class="megapost-teasers__label">
                                        Промо
                                        <img class="megapost-teasers__label-image" src="/images/Union.svg" />
                                    </div>
                                </a>

                                <a href="https://u.tmtm.ru/busines_itelon_promo" target="_blank" class="teaser__body"
                                    onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'megapost_promo', 'article_title'); }"
                                    rel="nofollow">
                                    <h3 class="teaser__body-title">Системная интеграция и визуальная конфигурация вместо
                                        «позвоните нам»</h3>
                                </a>
                            </li>
                            <li class="megapost-teasers__item teaser">
                                <a href="https://u.tmtm.ru/fintech_promo" target="_blank" class="teaser__image"
                                    onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'megapost_promo', 'article_pic'); }"
                                    rel="nofollow">
                                    <img src="https://habrastorage.org/getpro/tmtm/pictures/bb7/977/f22/bb7977f229d266e55880ac6f090594d4.jpg"
                                        class="teaser__image-pic" />
                                    <div class="megapost-teasers__label">
                                        Мегатест
                                    </div>
                                </a>

                                <a href="https://u.tmtm.ru/fintech_promo" target="_blank" class="teaser__body"
                                    onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'megapost_promo', 'article_title'); }"
                                    rel="nofollow">
                                    <h3 class="teaser__body-title">Что ты знаешь про финтех? Пройди сложный тест</h3>
                                </a>
                            </li>
                            <li class="megapost-teasers__item teaser">
                                <a href="https://habr.com/ru/company/legoeducation/blog/486058/" target="_blank"
                                    class="teaser__image"
                                    onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'megapost_promo', 'article_pic'); }"
                                    rel="nofollow">
                                    <img src="https://habrastorage.org/getpro/tmtm/pictures/e7a/f7a/de3/e7af7ade3ff91bea3a4e2fcd005403b2.jpg"
                                        class="teaser__image-pic" />
                                    <div class="megapost-teasers__label">
                                        Интересно
                                    </div>
                                </a>

                                <a href="https://habr.com/ru/company/legoeducation/blog/486058/" target="_blank"
                                    class="teaser__body"
                                    onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'megapost_promo', 'article_title'); }"
                                    rel="nofollow">
                                    <h3 class="teaser__body-title">Робозвери, планы уроков и новые детали: обзор набора
                                        LEGO Education SPIKE Prime</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>





            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485952">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/vlreshet/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/f55/405/583/f5540558337a9fb5319c370faea2df33.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">vlreshet</span>
                        </a>

                        <span class="post__time">28 января 2020 в 18:21</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/485952/" class="post__title_link">CLI интерфейс для Laravel
                            Artisan</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/laravel/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Laravel'); }">Laravel</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">Хочу представить composer-пакет для Laravel, возможно
                            кому-то придётся по душе. <br>
                            <br>
                            Суть проще показать, чем объяснять.<br>
                            <br>
                            <img src="https://habrastorage.org/getpro/habr/post_images/83d/a0a/fd4/83da0afd4f3b9fd03115058f3b99e663.jpg"
                                alt="image"><br>
                            <br>
                            Кого заинтересовало — прошу под кат.<br></div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/post/485952/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_" data-post-type="publish_ugc_ru,h_260,h_18812,f_develop"
                            id="infopanel_post_485952">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 14: &uarr;14 и &darr;0">+14</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_260,h_18812,f_develop" data-type="2"
                                    data-id="485952" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">11</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">1,5k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/485952/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">26</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485910">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/MaxRokatansky/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/20b/563/58e/20b56358e782028495372afc0724d655.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">MaxRokatansky</span>
                        </a>

                        <span class="post__time">28 января 2020 в 15:38</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/company/otus/blog/485910/" class="post__title_link">Разворачиваем
                            API с AWS Elastic Beanstalk</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/company/otus/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Блог компании OTUS. Онлайн-образование'); }">Блог
                                компании OTUS. Онлайн-образование</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/api/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'API'); }">API</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html"><img
                                src="https://habrastorage.org/webt/m2/kj/8z/m2kj8zwyoixdlapr_0j0bmoop6q.jpeg"><br>
                            <br>
                            В конце января мы провели очередной <b>онлайн-интенсив</b> по курсу <a
                                href="https://otus.pw/JYMV/">«Backend-разработчик на PHP»</a>. В этот раз темой
                            открытого урока стало с<b>оздание Telegram-бота для заказа кофе в заведении и оплаты
                                онлайн</b>. Вебинар получился очень насыщенным, поэтому растянулся на два дня: <a
                                href="https://youtu.be/IShce1cszPw">«День 1»</a> и <a
                                href="https://youtu.be/WO7g_Hv9zro">«День 2»</a>. Мы же предлагаем вашему вниманию
                            текстовую версию <b>первого дня онлайн-интенсива.</b> Он был посвящён знакомству с AWS
                            Elastic Beanstalk и разворачиванию API с его помощью.<br>
                            <br>
                            Преподаватель — <a
                                href="https://otus.ru/teacher/583/?utm_source=habr&amp;utm_medium=affilate&amp;utm_campaign=php&amp;utm_term=28.01.2020">Михаил
                                Каморин</a>, Senior Backend Developer в Skyeng.</div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/company/otus/blog/485910/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_" data-post-type="publish_corp_ru,c_otus,h_260,h_17690,f_develop"
                            id="infopanel_post_485910">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 9: &uarr;8 и &darr;1">+7</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_corp_ru,c_otus,h_260,h_17690,f_develop" data-type="2"
                                    data-id="485910" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">30</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">1,4k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/company/otus/blog/485910/#comments"
                                    class="post-stats__comments-link" rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">1</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485732">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/vyants/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/c3f/88f/58b/c3f88f58b8db4460fb2d45c7938a2878.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">vyants</span>
                        </a>

                        <span class="post__time">27 января 2020 в 19:40</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/company/badoo/blog/485732/" class="post__title_link">15 февраля
                            Badoo PHP Meetup #4. Легаси</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/company/badoo/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Блог компании Badoo'); }">Блог
                                компании Badoo</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/webdev/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Разработка веб-сайтов'); }">Разработка
                                веб-сайтов</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/programming/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Программирование'); }">Программирование</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/tech_events/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Конференции'); }">Конференции</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html"><img
                                src="https://habrastorage.org/webt/fp/lp/fd/fplpfderidthwmm4b0r6azjth8a.png"><br>
                            <br>
                            Привет!<br>
                            <br>
                            15 февраля, в субботу, приглашаем на очередную встречу сообщества PHP-разработчиков в офисе
                            Badoo. <br>
                            <br>
                            Митап будет целиком и полностью посвящен легаси, и вот почему. Мы часто слышим утверждения
                            из разряда «о легаси все уже сказано», «о чем там рассказывать», «ну есть оно и есть, ничего
                            не поделаешь». Но в то же время все продолжают читать и без конца рефакторить устаревший
                            код, а возвращаясь с очередной конференции — вдохновленными новыми идеями и подходами —
                            громко вздыхать и пускать скупую слезу на свой репозиторий.<br>
                            <br>
                            Мы пообщались с разработчиками крупных компаний и попросили поделиться опытом. На встрече
                            обсудим процессные и автоматические, тактические и стратегические подходы для борьбы с этим
                            неприятным явлением. Будем надеяться, что эта концентрация разных практик и взглядов на
                            легаси упростит кому-то жизнь.<br>
                            <br>
                            <a href="https://badoo-tech.timepad.ru/event/1244780/">Регистрация по ссылке,
                                обязательная</a> (важно: пишите свои данные кириллицей). Не забудьте дождаться
                            подтверждения участия, оно придет дней за 10 до митапа. <br>
                            <br>
                            Первый доклад в 12:00. В программе пять докладов, практически не ограниченное свободное
                            общение за кофе, викторина, розыгрыш билета на <a
                                href="https://phprussia.ru/moscow/2020/">PHPRussia</a>, а в качестве afterparty —
                            очередная встреча сообщества <a href="https://www.meetup.com/ru-RU/BeerPHP-Moscow">BeerPHP
                                Moscow</a>. <br></div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/company/badoo/blog/485732/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_"
                            data-post-type="publish_corp_ru,c_badoo,h_91,h_260,h_359,h_20754,f_develop,f_marketing"
                            id="infopanel_post_485732">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 46: &uarr;46 и &darr;0">+46</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_corp_ru,c_badoo,h_91,h_260,h_359,h_20754,f_develop,f_marketing"
                                    data-type="2" data-id="485732" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">21</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">3,8k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/company/badoo/blog/485732/#comments"
                                    class="post-stats__comments-link" rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">2</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>



            <li class="content-list__item content-list__item_post shortcuts_item">
                <!-- /235032688/HH/HH02_inpage_wide -->
                <div class="dfp-slot">
                    <div class="dfp-slot__banner dfp-slot__banner_wide" id='div-gpt-hh-inpage-wide'>
                        <script>
                            window.display_dfp_slot('div-gpt-hh-inpage-wide');
                        </script>
                    </div>
                    <div class="dfp-slot__placeholder">
                        <span class="dfp-slot__placeholder-text">AdBlock похитил этот баннер, но&nbsp;баннеры
                            не&nbsp;зубы &mdash; отрастут<br /><br /> <a href="https://u.tmtm.ru/tmtalkadblock"
                                class="btn btn_large btn_blue" style="display:inline-flex!important;"
                                target="_blank">Подробнее</a></span>
                    </div>
                    <a href="https://tmtm.ru/services/advertising/" target="_blank" class="dfp-slot__label">Реклама</a>

                </div>
            </li>



            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485620">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/spasibo_kep/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/f93/992/d3f/f93992d3f47b0da1c89de8e08d7ccd5e.png"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">spasibo_kep</span>
                        </a>

                        <span class="post__time">27 января 2020 в 11:45</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/company/skyeng/blog/485620/" class="post__title_link">Йошкар-Ола,
                            вообще, айтишный город?</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/company/skyeng/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Блог компании Skyeng'); }">Блог
                                компании Skyeng</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/webdev/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Разработка веб-сайтов'); }">Разработка
                                веб-сайтов</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/programming/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Программирование'); }">Программирование</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/symfony/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Symfony'); }">Symfony</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">Именно таким вопросом мы задались, встретив ребят оттуда
                            на казанском PHP-митапе. Оказалось, всего за месяц они смогли раскачать местное сообщество —
                            небольшое расследование со ссылками на городские чаты, активности и каналы под катом. <br>
                            <br>
                            <img src="https://habrastorage.org/webt/uf/uo/fy/ufuofyt3zstvjem66jr8-atp2ow.jpeg"><br>
                            <br>
                            А если вам точно не хватало развиртуализации, приходите <a
                                href="https://php-yola.timepad.ru/event/1234664/">1 февраля на 2-й PHP-митап</a> от
                            местного чата.<br></div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/company/skyeng/blog/485620/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_"
                            data-post-type="publish_corp_ru,c_skyeng,h_91,h_260,h_359,h_477,f_develop"
                            id="infopanel_post_485620">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 22: &uarr;22 и &darr;0">+22</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_corp_ru,c_skyeng,h_91,h_260,h_359,h_477,f_develop"
                                    data-type="2" data-id="485620" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">15</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">4,8k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/company/skyeng/blog/485620/#comments"
                                    class="post-stats__comments-link" rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">1</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_484586">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/Vasiliskov/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/999/520/747/99952074703a56548d01618549eb41d2.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">Vasiliskov</span>
                        </a>

                        <span class="post__time">27 января 2020 в 10:24</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/company/ua-hosting/blog/484586/" class="post__title_link">Работа с
                            IPv6 в PHP</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/company/ua-hosting/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Блог компании ua-hosting.company'); }">Блог
                                компании ua-hosting.company</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/webdev/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Разработка веб-сайтов'); }">Разработка
                                веб-сайтов</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/programming/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Программирование'); }">Программирование</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/ipv6/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'IPv6'); }">IPv6</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list">
                        <li class="inline-list__item inline-list__item_post-type"><span class="post__type-label"
                                title="Обучающий материал">Tutorial</span></li>
                    </ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">Недавно мы получили статус LIR и /29 блок IPv6. А следом
                            возникла необходимость вести учёт назначенных подсетей. И коль скоро наш биллинг написан на
                            PHP, пришлось немного проникнуться вопросом и осознать, что этот язык — не самый дружелюбный
                            в плане работы с IPv6. Под катом — наше решение возникших задач по работе с адресами и
                            диапазонами. Возможно, не самое элегантное, но поставленные задачи выполняет.<br>
                            <br>
                            <img src="https://habrastorage.org/webt/bk/on/p9/bkonp9-y-sxfdqvirte2ehjunr0.jpeg"></div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/company/ua-hosting/blog/484586/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_"
                            data-post-type="publish_corp_ru,c_ua-hosting,h_91,h_260,h_359,h_18754,f_develop,f_admin"
                            id="infopanel_post_484586">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 21: &uarr;18 и &darr;3">+15</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_corp_ru,c_ua-hosting,h_91,h_260,h_359,h_18754,f_develop,f_admin"
                                    data-type="2" data-id="484586" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">42</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">4,3k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/company/ua-hosting/blog/484586/#comments"
                                    class="post-stats__comments-link" rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">10</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485592">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/pronskiy/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/27f/b99/eb3/27fb99eb3e30e3221c5839e88be02395.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">pronskiy</span>
                        </a>

                        <span class="post__time">27 января 2020 в 04:45</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/485592/" class="post__title_link">PHP-Дайджест № 172 (14 – 27
                            января 2020)</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/webdev/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Разработка веб-сайтов'); }">Разработка
                                веб-сайтов</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/symfony/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Symfony'); }">Symfony</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/yii/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Yii'); }">Yii</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/laravel/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Laravel'); }">Laravel</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html"><a href="https://habr.com/ru/post/485592/">
                                <div style="text-align:center;"><img
                                        src="https://habrastorage.org/webt/ri/sy/w2/risyw29wa6crorllrscepazyon0.jpeg"
                                        width="600"></div>
                            </a><br>
                            <p>Свежая подборка со ссылками на новости и материалы. В выпуске: PHP 7.4.2 и другие релизы,
                                Stringable RFC, обзор PHP 8, порция полезных инструментов, 4 ближайших митапа,
                                видеозаписи с конференций, стримы и многое другое.<br>
                                <br>
                                Приятного чтения!</p><br>
                        </div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/post/485592/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_"
                            data-post-type="publish_ugc_ru,h_91,h_260,h_477,h_9554,h_18812,f_develop"
                            id="infopanel_post_485592">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 68: &uarr;68 и &darr;0">+68</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_91,h_260,h_477,h_9554,h_18812,f_develop"
                                    data-type="2" data-id="485592" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">51</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">12,8k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/485592/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">13</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>




            <li class="content-list__item content-list__item_post shortcuts_item">

                <div class="promo-block promo-block_vacancies">
                    <h2 class="promo-block__header">

                        <a href="https://career.habr.com/vacancies" target="_blank"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=block_name&utm_campaign=vacancies_postlist"
                            class="promo-block__title-link" rel="nofollow">Вакансии</a>
                        <a href="https://career.habr.com/" target="_blank"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=block_logo&utm_campaign=vacancies_postlist"
                            class="promo-block__header-logo icon-svg_logo-mk" rel="nofollow">
                            <svg class="icon-svg" height="24" viewBox="0 0 144 22" width="146"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m14.8499 17.0001-5.10399-7.72199 5.05999-7.766h-3.718l-3.38799 5.28-3.344-5.28h-3.849996l5.059996 7.7-5.103996 7.78799h3.761996l3.388-5.302 3.40999 5.302z" />
                                <path
                                    d="m21.3494 5.36211c-2.97 0-4.664 1.628-4.972 3.586h2.992c.176-.594.748-1.1 1.848-1.1 1.078 0 1.87.55 1.87 1.606v.528h-2.486c-2.904 0-4.664 1.34199-4.664 3.67399 0 2.288 1.76 3.608 3.96 3.608 1.474 0 2.662-.572 3.366-1.496v1.232h2.97v-7.43599c0-2.772-1.958-4.202-4.884-4.202zm-.572 9.41599c-.99 0-1.628-.484-1.628-1.276 0-.814.704-1.298 1.694-1.298h2.244v.506c0 1.32-1.078 2.068-2.31 2.068z" />
                                <path
                                    d="m35.1339 5.82411c-1.584 0-2.882.572-3.718 1.738.22-2.134 1.078-3.19 3.234-3.52l4.334-.638v-2.794003l-4.642.770003c-4.488.748-5.874 3.74-5.874 8.73399 0 4.488 2.178 7.15 6.028 7.15 3.454 0 5.588-2.64 5.588-5.808 0-3.40999-1.98-5.63199-4.95-5.63199zm-.792 8.75599c-1.672 0-2.596-1.342-2.596-3.146 0-1.73799.968-2.99199 2.618-2.99199 1.606 0 2.508 1.298 2.508 3.01399 0 1.716-.88 3.124-2.53 3.124z" />
                                <path
                                    d="m48.6512 5.36211c-1.672 0-2.75.726-3.322 1.584v-1.32h-3.08v15.57599h3.212v-5.302c.572.792 1.65 1.364 3.102 1.364 2.794 0 5.016-2.2 5.016-5.94 0-3.80599-2.222-5.96199-4.928-5.96199zm-.77 9.12999c-1.496 0-2.486-1.21-2.486-3.124v-.088c0-1.91399.99-3.14599 2.486-3.14599s2.464 1.254 2.464 3.18999c0 1.936-.968 3.168-2.464 3.168z" />
                                <path
                                    d="m72.6314 17.0001-7.48-8.07399 7.348-7.414h-2.53l-6.886 6.908v-6.908h-1.958v15.48799h1.958v-7.39199l6.952 7.39199z" />
                                <path
                                    d="m78.554 5.67011c-2.53 0-4.07 1.43-4.422 3.146h1.826c.308-.814 1.1-1.474 2.552-1.474 1.43 0 2.508.77 2.508 2.31v.74799h-2.948c-2.706 0-4.356 1.298-4.356 3.432 0 2.112 1.672 3.41 3.828 3.41 1.408 0 2.728-.528 3.564-1.562v1.32h1.782v-7.34799c0-2.486-1.738-3.982-4.334-3.982zm-.77 9.92199c-1.232 0-2.156-.616-2.156-1.782 0-1.188 1.034-1.804 2.552-1.804h2.838v.814c0 1.694-1.474 2.772-3.234 2.772z" />
                                <path
                                    d="m91.5395 5.67011c-1.914 0-3.08.88-3.63 1.826v-1.584h-1.826v15.28999h1.892v-5.566c.528.814 1.716 1.606 3.498 1.606 2.552 0 5.06-1.87 5.06-5.786 0-3.89399-2.486-5.78599-4.994-5.78599zm-.242 9.85599c-2.046 0-3.388-1.562-3.388-4.026v-.088c0-2.46399 1.342-4.02599 3.388-4.02599 1.98 0 3.3 1.65 3.3 4.06999 0 2.42-1.32 4.07-3.3 4.07z" />
                                <path
                                    d="m103.545 9.49811h-2.486v-3.586h-1.8915v11.08799h4.3555c2.376 0 3.916-1.628 3.916-3.784s-1.54-3.71799-3.894-3.71799zm-.242 5.82999h-2.244v-4.158h2.244c1.452 0 2.244.858 2.244 2.046s-.792 2.112-2.244 2.112z" />
                                <path
                                    d="m119.368 12.0281v-.968c0-3.29999-1.892-5.38999-4.84-5.38999-3.036 0-5.214 2.2-5.214 5.78599 0 3.564 2.156 5.786 5.368 5.786 2.882 0 4.268-1.804 4.554-3.102h-1.914c-.198.572-1.078 1.408-2.618 1.408-2.046 0-3.41-1.496-3.41-3.476v-.044zm-4.884-4.66399c1.782 0 2.882 1.144 2.97 3.05799h-6.138c.154-1.82599 1.32-3.05799 3.168-3.05799z" />
                                <path
                                    d="m127.461 5.67011c-1.914 0-3.08.88-3.63 1.826v-1.584h-1.826v15.28999h1.892v-5.566c.528.814 1.716 1.606 3.498 1.606 2.552 0 5.06-1.87 5.06-5.786 0-3.89399-2.486-5.78599-4.994-5.78599zm-.242 9.85599c-2.046 0-3.388-1.562-3.388-4.026v-.088c0-2.46399 1.342-4.02599 3.388-4.02599 1.98 0 3.3 1.65 3.3 4.06999 0 2.42-1.32 4.07-3.3 4.07z" />
                                <path
                                    d="m139.247 5.67011c-2.53 0-4.07 1.43-4.422 3.146h1.826c.308-.814 1.1-1.474 2.552-1.474 1.43 0 2.508.77 2.508 2.31v.74799h-2.948c-2.706 0-4.356 1.298-4.356 3.432 0 2.112 1.672 3.41 3.828 3.41 1.408 0 2.728-.528 3.564-1.562v1.32h1.782v-7.34799c0-2.486-1.738-3.982-4.334-3.982zm-.77 9.92199c-1.232 0-2.156-.616-2.156-1.782 0-1.188 1.034-1.804 2.552-1.804h2.838v.814c0 1.694-1.474 2.772-3.234 2.772z" />
                                </svg>

                        </a>
                    </h2>

                    <div class="promo-block__content">
                        <ul class="content-list content-list_promo">
                            <li class="content-list__item content-list__item_promo">
                                <a href="https://career.habr.com/vacancies/1000056639" class="promo-item"
                                    data-utm="?utm_source=tm_habrahabr&utm_medium=tm_block&utm_content=vacancy&utm_campaign=vacancies_postlist">
                                    <div class="promo-item__image-wrap">
                                        <img src="https://habrastorage.org/getpro/moikrug/uploads/company/100/004/812/1/logo/medium_c68c3cad25a309eb0b370404e987a15e.png"
                                            alt="" class="promo-item__image">
                                    </div>
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__title promo-item__title_hovered">Разработчик C</div>
                                        <div class="promo-item__attrs">
                                            <span class="promo-item__attrs-item">FunBox</span>
                                            <span class="promo-item__attrs-item">Томск</span>
                                            <span class="promo-item__attrs-item">Можно удаленно</span>
                                        </div>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">
                                        <div class="promo-item__amount promo-item__amount_rur">
                                            <span title="120000 rur">от 120 000</span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="https://career.habr.com/vacancies/1000056638" class="promo-item"
                                    data-utm="?utm_source=tm_habrahabr&utm_medium=tm_block&utm_content=vacancy&utm_campaign=vacancies_postlist">
                                    <div class="promo-item__image-wrap">
                                        <img src="https://habrastorage.org/getpro/moikrug/uploads/company/100/004/812/1/logo/medium_c68c3cad25a309eb0b370404e987a15e.png"
                                            alt="" class="promo-item__image">
                                    </div>
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__title promo-item__title_hovered">Разработчик C</div>
                                        <div class="promo-item__attrs">
                                            <span class="promo-item__attrs-item">FunBox</span>
                                            <span class="promo-item__attrs-item">Новосибирск</span>
                                            <span class="promo-item__attrs-item">Можно удаленно</span>
                                        </div>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">
                                        <div class="promo-item__amount promo-item__amount_rur">
                                            <span title="120000 rur">от 120 000</span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="https://career.habr.com/vacancies/1000056467" class="promo-item"
                                    data-utm="?utm_source=tm_habrahabr&utm_medium=tm_block&utm_content=vacancy&utm_campaign=vacancies_postlist">
                                    <div class="promo-item__image-wrap">
                                        <img src="https://habrastorage.org/getpro/moikrug/uploads/company/901/244/761/logo/medium_c35efb293cd85320d66e74304d3a8076.jpg"
                                            alt="" class="promo-item__image">
                                    </div>
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__title promo-item__title_hovered">Продюсер-стажёр
                                            (контент-студия)</div>
                                        <div class="promo-item__attrs">
                                            <span class="promo-item__attrs-item">Хабр</span>
                                            <span class="promo-item__attrs-item">Москва</span>

                                        </div>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">
                                        <div class="promo-item__amount promo-item__amount_rur">
                                            <span title="40000 rur">от 40 000</span>
                                            <span title="40000 rur">до 40 000</span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="https://career.habr.com/vacancies/1000056637" class="promo-item"
                                    data-utm="?utm_source=tm_habrahabr&utm_medium=tm_block&utm_content=vacancy&utm_campaign=vacancies_postlist">
                                    <div class="promo-item__image-wrap">
                                        <img src="https://habrastorage.org/getpro/moikrug/uploads/company/100/004/812/1/logo/medium_c68c3cad25a309eb0b370404e987a15e.png"
                                            alt="" class="promo-item__image">
                                    </div>
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__title promo-item__title_hovered">Разработчик C</div>
                                        <div class="promo-item__attrs">
                                            <span class="promo-item__attrs-item">FunBox</span>
                                            <span class="promo-item__attrs-item">Екатеринбург</span>
                                            <span class="promo-item__attrs-item">Можно удаленно</span>
                                        </div>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">
                                        <div class="promo-item__amount promo-item__amount_rur">
                                            <span title="120000 rur">от 120 000</span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="https://career.habr.com/vacancies/1000056636" class="promo-item"
                                    data-utm="?utm_source=tm_habrahabr&utm_medium=tm_block&utm_content=vacancy&utm_campaign=vacancies_postlist">
                                    <div class="promo-item__image-wrap">
                                        <img src="https://habrastorage.org/getpro/moikrug/uploads/company/100/004/812/1/logo/medium_c68c3cad25a309eb0b370404e987a15e.png"
                                            alt="" class="promo-item__image">
                                    </div>
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__title promo-item__title_hovered">Разработчик C</div>
                                        <div class="promo-item__attrs">
                                            <span class="promo-item__attrs-item">FunBox</span>
                                            <span class="promo-item__attrs-item">Санкт-Петербург</span>
                                            <span class="promo-item__attrs-item">Можно удаленно</span>
                                        </div>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">
                                        <div class="promo-item__amount promo-item__amount_rur">
                                            <span title="120000 rur">от 120 000</span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                        </ul>
                    </div>

                    <div class="promo-block__footer">
                        <a href="https://career.habr.com/vacancies/"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=vacancies_all&utm_campaign=vacancies_postlist"
                            class="promo-block__footer-link promo-block__footer-link_selected" target="_blank"
                            rel="nofollow">Все вакансии</a>
                    </div>
                </div>
            </li>


            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485392">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/Mazay98/" class="post__user-info user-info"
                            title="Автор публикации">
                            <span class="default-image_mini default-image_green">
                                <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true"
                                    version="1.1" role="img">
                                    <path
                                        d="M21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.379 1.122-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.379-1.122 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5h-19zM15.598 12.385zM19.438 15.417l-.002-.005v-.001c-.875-2.226-2.484-3.054-3.445-3.549l-.273-.143c.029-.497-.025-1.034-.167-1.599l-.128.032.123-.044c-.765-2.152-1.757-2.585-2.632-2.967l-.006-.003-.535-2.121c.357-.065.628-.375.628-.752.001-.423-.342-.765-.765-.765s-.766.342-.766.765c0 .358.248.657.581.74l-.825 1.654-.014-.003-.024-.003c-1.053-.033-1.842.369-2.5.947-.633-.322-1.515-.729-2.158-1.814.107-.12.174-.276.174-.45 0-.375-.303-.678-.678-.678s-.678.303-.678.678.303.678.678.678l.221-.04c.416.597 1.09 1.181 1.347 2.828l-.072.091.104.081-.112-.067c-1.157 1.914-.793 4.248.207 5.37-.998 2.546-1.035 4.681-.097 5.868l.002.002.003.003c.119.162.313.233.524.233.189 0 .39-.057.559-.154.312-.179.441-.459.326-.713l-.12.054.119-.056c-.581-1.243-.474-2.713.314-4.37.4.131.778.208 1.145.234l.139.73c.264 1.418.514 2.757 1.297 4.006.132.264.453.387.777.387.122 0 .245-.018.357-.051.385-.116.591-.399.537-.738l-.129.021.125-.042c-.204-.606-.431-1.146-.649-1.67-.373-.894-.725-1.742-.891-2.737.407-.042.797-.129 1.161-.261.825.692 1.661 1.492 2.743 3.406h.001c.072.14.224.215.41.215.105 0 .222-.024.339-.073.365-.155.652-.531.477-1.006v-.001c-.432-1.849-1.426-2.778-2.428-3.547.162-.175.311-.366.442-.576.75.399 1.878 1.005 3.127 2.766l.047.067.011-.008c.151.156.317.24.48.24.096 0 .191-.027.279-.084.306-.194.439-.662.29-1.005zm-8.878-2.493c-.947 0-1.713-.767-1.713-1.713s.767-1.713 1.713-1.713c.947 0 1.713.767 1.713 1.713s-.767 1.713-1.713 1.713zm6.587 4.648l-.084.021v-.001l.084-.02zm-2.007-5.312zm.022 1.006zM11.225 11.604c0 .385-.312.697-.697.697s-.697-.312-.697-.697c0-.385.312-.697.697-.697s.697.312.697.697z" />
                                    </svg>
                            </span>
                            <span class="user-info__nickname user-info__nickname_small">Mazay98</span>
                        </a>

                        <span class="post__time">26 января 2020 в 19:28</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/485392/" class="post__title_link">Бот в telegram, который
                            следит за доменом</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/programming/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Программирование'); }">Программирование</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">Привет жителям Хабра.<br>
                            <br>
                            В процессе изучения PHP, пришла в голову мысль, для практики написать какого-нибудь бота на
                            PHP, без использования фрэймворков.<br>
                            <br>
                            Выбор пал на бота, который будет получать информацию о жизни домена (whois), затем доставать
                            оттуда дату регистрации и добавлять этот домен в БД (mysql), с последующий привязкой к
                            пользователю и уведомлением в telegram.<br>
                            <br>
                            Исходный код в <a href="https://github.com/Mazay98/botDomain" rel="nofollow">моем</a>
                            репозитории на гите.<br>
                            <br>
                            Мне захотелось использовать <a href="https://habr.com/ru/post/150267/">MVC</a> структуру,
                            что оказалось на <b>мой</b> взгляд не совсем верным, так как view не был задействован и это
                            уже нельзя назвать mvc, но да ладно…<br></div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/post/485392/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_" data-post-type="publish_ugc_ru,h_260,h_359,f_develop"
                            id="infopanel_post_485392">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 19: &uarr;17 и &darr;2">+15</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_260,h_359,f_develop" data-type="2" data-id="485392"
                                    data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">82</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">9,3k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/485392/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">23</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485520">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/sergey126992/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/c19/264/7bc/c192647bc5ece4a40867d311f96c502d.png"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">sergey126992</span>
                        </a>

                        <span class="post__time">26 января 2020 в 13:11</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/485520/" class="post__title_link">QueryFilter: концепция
                            фильтрации моделей</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/webdev/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Разработка веб-сайтов'); }">Разработка
                                веб-сайтов</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/laravel/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Laravel'); }">Laravel</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list">
                        <li class="inline-list__item inline-list__item_post-type"><a href="https://habr.com/ru/sandbox/"
                                class="post__type-label" title="Перейти в песочницу">Из песочницы</a></li>
                    </ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">Хочу представить вашему вниманию концепцию организации
                            фильтрации по URL-запросу. Для примера буду использовать язык PHP и фреймворк Laravel.<br />
                            <br />
                            <h4>Концепция</h4><br />
                            Идея заключается в создании универсального класса <i>QueryFilter</i> для работы с
                            фильтрами.<br />
                            <br />
                            <pre><code class="php">GET /posts?title=source&status=active</code></pre><br />
                            Использую данный пример, мы будем фильтровать <i>посты</i> (модель Post) по следующим
                            критериям:<br />
                            <br />
                            <ul>
                                <li>Наличие слова «source» в поле <i>title</i>;</li>
                                <li>Значение «publish» в поле <i>status</i>;</li>
                            </ul>
                        </div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/post/485520/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_" data-post-type="publish_ugc_ru,h_91,h_260,h_18812,f_develop"
                            id="infopanel_post_485520">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 7: &uarr;4 и &darr;3">+1</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_91,h_260,h_18812,f_develop" data-type="2"
                                    data-id="485520" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">22</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">1,2k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/485520/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">6</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485418">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/vlreshet/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/f55/405/583/f5540558337a9fb5319c370faea2df33.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">vlreshet</span>
                        </a>

                        <span class="post__time">25 января 2020 в 02:30</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/485418/" class="post__title_link">PHPUnit. «Как мне
                            протестировать мой чёртов контроллер», или тестирование для сомневающихся</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">Привет, Хабр. <br>
                            <br>
                            <img src="https://habrastorage.org/webt/do/li/as/doliasx6rmfzgqhvfc-7jdazq-w.jpeg"
                                alt="image"><br>
                            <br>
                            Да, это очередной пост на тему тестирования. Казалось бы, что тут уже можно обсуждать? Все
                            кому надо — пишут тесты, кому не надо — не пишут, все счастливы! Факт же в том, что
                            большинство постов о юнит-тестировании имеют… как бы так никого не обидеть… идиотские
                            примеры! Нет, ну правда! Сегодня я попытаюсь это исправить. Прошу под кат.<br></div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/post/485418/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_" data-post-type="publish_ugc_ru,h_260,f_develop"
                            id="infopanel_post_485418">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 27: &uarr;27 и &darr;0">+27</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_260,f_develop" data-type="2" data-id="485418"
                                    data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">119</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">7,3k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/485418/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">42</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>





            <li class="content-list__item content-list__item_post shortcuts_item">

                <div class="promo-block promo-block_questions">
                    <h2 class="promo-block__header">

                        <a href="http://qna.habr.com/" target="_blank"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=block_name&utm_campaign=questions_postlist"
                            class="promo-block__title-link" rel="nofollow">Вопросы и ответы</a>
                        <a href="http://qna.habr.com/" target="_blank"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=block_logo&utm_campaign=questions_postlist"
                            class="promo-block__header-logo icon-svg_logo-toster" rel="nofollow">
                            <svg class="icon-svg" height="22" viewBox="0 0 107 22" width="107"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m14.8499 17.0001-5.10399-7.72199 5.05999-7.766h-3.718l-3.38799 5.28-3.344-5.28h-3.849996l5.059996 7.7-5.103996 7.78799h3.761996l3.388-5.302 3.40999 5.302z" />
                                <path
                                    d="m21.3494 5.36211c-2.97 0-4.664 1.628-4.972 3.586h2.992c.176-.594.748-1.1 1.848-1.1 1.078 0 1.87.55 1.87 1.606v.528h-2.486c-2.904 0-4.664 1.34199-4.664 3.67399 0 2.288 1.76 3.608 3.96 3.608 1.474 0 2.662-.572 3.366-1.496v1.232h2.97v-7.43599c0-2.772-1.958-4.202-4.884-4.202zm-.572 9.41599c-.99 0-1.628-.484-1.628-1.276 0-.814.704-1.298 1.694-1.298h2.244v.506c0 1.32-1.078 2.068-2.31 2.068z" />
                                <path
                                    d="m35.1339 5.82411c-1.584 0-2.882.572-3.718 1.738.22-2.134 1.078-3.19 3.234-3.52l4.334-.638v-2.794003l-4.642.770003c-4.488.748-5.874 3.74-5.874 8.73399 0 4.488 2.178 7.15 6.028 7.15 3.454 0 5.588-2.64 5.588-5.808 0-3.40999-1.98-5.63199-4.95-5.63199zm-.792 8.75599c-1.672 0-2.596-1.342-2.596-3.146 0-1.73799.968-2.99199 2.618-2.99199 1.606 0 2.508 1.298 2.508 3.01399 0 1.716-.88 3.124-2.53 3.124z" />
                                <path
                                    d="m48.6512 5.36211c-1.672 0-2.75.726-3.322 1.584v-1.32h-3.08v15.57599h3.212v-5.302c.572.792 1.65 1.364 3.102 1.364 2.794 0 5.016-2.2 5.016-5.94 0-3.80599-2.222-5.96199-4.928-5.96199zm-.77 9.12999c-1.496 0-2.486-1.21-2.486-3.124v-.088c0-1.91399.99-3.14599 2.486-3.14599s2.464 1.254 2.464 3.18999c0 1.936-.968 3.168-2.464 3.168z" />
                                <path
                                    d="m74.5894 9.25611c0-4.598-2.794-7.986-7.128-7.986s-7.128 3.388-7.128 7.986c0 4.59799 2.794 7.98599 7.128 7.98599 1.144 0 2.178-.22 3.08-.638l1.166 1.738h2.178l-1.848-2.728c1.628-1.43 2.552-3.696 2.552-6.35799zm-7.128 6.15999c-3.168 0-5.126-2.552-5.126-6.15999 0-3.608 1.958-6.16 5.126-6.16s5.126 2.552 5.126 6.16c0 1.97999-.572 3.65199-1.628 4.72999l-1.122-1.672h-2.178l1.826 2.706c-.594.264-1.276.396-2.024.396z" />
                                <path
                                    d="m91.1543 17.0001-2.992-3.234 2.948-3.652h-2.222l-1.87 2.42-3.498-3.76199c2.046-.968 3.124-2.178 3.124-3.916 0-2.068-1.584-3.586-3.872-3.586-2.376 0-4.048 1.628-4.048 3.608 0 1.32.77 2.244 1.628 3.124l.264.264c-2.442.99-3.674 2.46399-3.674 4.46599 0 2.464 1.914 4.51 5.082 4.51 1.914 0 3.476-.748 4.73-2.002l.198-.198 1.804 1.958zm-8.426-14.07999c1.166 0 2.09.704 2.09 1.914 0 1.166-.836 2.068-2.442 2.794l-.616-.616c-.462-.462-1.166-1.188-1.166-2.2 0-1.144.924-1.892 2.134-1.892zm-.594 12.58399c-2.068 0-3.19-1.188-3.19-2.838 0-1.408.836-2.464 2.838-3.23399l4.048 4.39999-.132.132c-.968 1.012-2.2 1.54-3.564 1.54z" />
                                <path
                                    d="m103.751 17.0001h2.112l-5.852-15.48799h-2.0238l-5.852 15.48799h2.112l1.496-4.092h6.4898zm-4.7738-13.02399 2.5958 7.12799h-5.1698z" />
                                </svg>

                        </a>
                    </h2>

                    <div class="promo-block__content">
                        <ul class="content-list content-list_promo">
                            <li class="content-list__item content-list__item_promo">
                                <a href="https://qna.habr.com/q/709453" class="promo-item"
                                    data-utm="?utm_source=habr&utm_medium=habr_block&utm_campaign=questions_postlist">
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__attrs promo-item__attrs_toster">
                                            <span class="promo-item__attrs-item promo-item__attrs-item_nobullet">
                                                <img src="//habrastorage.org/files/373/e8b/dd3/373e8bdd3cb644d3bbeba47d34d1876d.png"
                                                    class="promo-item__attrs-img" width="16" height="16"
                                                    alt="tag image">
                                                PHP
                                            </span>
                                            <span class="promo-item__attrs-item promo-item__attrs-item_nobullet">
                                                <span class="svg-icon_complexity svg-icon_complexity-2">
                                                    <svg class="icon-svg" width="51" height="32" viewBox="0 0 51 32">
                                                        <path
                                                            d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z">
                                                        </path>
                                                    </svg>

                                                </span>
                                                Простой
                                            </span>
                                        </div>
                                        <h3 class="promo-item__title promo-item__title_hovered">Как сделать цикл в
                                            классе?</h3>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">1 ответ</div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="https://qna.habr.com/q/709441" class="promo-item"
                                    data-utm="?utm_source=habr&utm_medium=habr_block&utm_campaign=questions_postlist">
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__attrs promo-item__attrs_toster">
                                            <span class="promo-item__attrs-item promo-item__attrs-item_nobullet">
                                                <img src="//habrastorage.org/files/373/e8b/dd3/373e8bdd3cb644d3bbeba47d34d1876d.png"
                                                    class="promo-item__attrs-img" width="16" height="16"
                                                    alt="tag image">
                                                PHP
                                            </span>
                                            <span class="promo-item__attrs-item promo-item__attrs-item_nobullet">
                                                <span class="svg-icon_complexity svg-icon_complexity-2">
                                                    <svg class="icon-svg" width="51" height="32" viewBox="0 0 51 32">
                                                        <path
                                                            d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z">
                                                        </path>
                                                    </svg>

                                                </span>
                                                Простой
                                            </span>
                                        </div>
                                        <h3 class="promo-item__title promo-item__title_hovered">Как грамотно настроить
                                            получение используя curl при пагинации?</h3>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">0 ответов</div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="https://qna.habr.com/q/709433" class="promo-item"
                                    data-utm="?utm_source=habr&utm_medium=habr_block&utm_campaign=questions_postlist">
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__attrs promo-item__attrs_toster">
                                            <span class="promo-item__attrs-item promo-item__attrs-item_nobullet">
                                                <img src="//habrastorage.org/files/373/e8b/dd3/373e8bdd3cb644d3bbeba47d34d1876d.png"
                                                    class="promo-item__attrs-img" width="16" height="16"
                                                    alt="tag image">
                                                PHP
                                            </span>
                                            <span class="promo-item__attrs-item promo-item__attrs-item_nobullet">
                                                <span class="svg-icon_complexity svg-icon_complexity-2">
                                                    <svg class="icon-svg" width="51" height="32" viewBox="0 0 51 32">
                                                        <path
                                                            d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z">
                                                        </path>
                                                    </svg>

                                                </span>
                                                Простой
                                            </span>
                                        </div>
                                        <h3 class="promo-item__title promo-item__title_hovered">Где можно найти
                                            нормальную реализацию контроля авторизованного?</h3>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">1 ответ</div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="https://qna.habr.com/q/709431" class="promo-item"
                                    data-utm="?utm_source=habr&utm_medium=habr_block&utm_campaign=questions_postlist">
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__attrs promo-item__attrs_toster">
                                            <span class="promo-item__attrs-item promo-item__attrs-item_nobullet">
                                                <img src="https://habrastorage.org/webt/5d/6f/f2/5d6ff218a7e95645374962.png"
                                                    class="promo-item__attrs-img" width="16" height="16"
                                                    alt="tag image">
                                                Laravel
                                            </span>
                                            <span class="promo-item__attrs-item promo-item__attrs-item_nobullet">
                                                <span class="svg-icon_complexity svg-icon_complexity-2">
                                                    <svg class="icon-svg" width="51" height="32" viewBox="0 0 51 32">
                                                        <path
                                                            d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z">
                                                        </path>
                                                    </svg>

                                                </span>
                                                Простой
                                            </span>
                                        </div>
                                        <h3 class="promo-item__title promo-item__title_hovered">Как правильно написать
                                            маршрут в Laravel?</h3>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">1 ответ</div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="https://qna.habr.com/q/709423" class="promo-item"
                                    data-utm="?utm_source=habr&utm_medium=habr_block&utm_campaign=questions_postlist">
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__attrs promo-item__attrs_toster">
                                            <span class="promo-item__attrs-item promo-item__attrs-item_nobullet">
                                                <img src="https://habrastorage.org/webt/5a/6c/22/5a6c2291048ba583987678.png"
                                                    class="promo-item__attrs-img" width="16" height="16"
                                                    alt="tag image">
                                                AJAX
                                            </span>
                                            <span class="promo-item__attrs-item promo-item__attrs-item_nobullet">
                                                <span class="svg-icon_complexity svg-icon_complexity-3">
                                                    <svg class="icon-svg" width="51" height="32" viewBox="0 0 51 32">
                                                        <path
                                                            d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z">
                                                        </path>
                                                    </svg>

                                                </span>
                                                Средний
                                            </span>
                                        </div>
                                        <h3 class="promo-item__title promo-item__title_hovered">Как работать с
                                            webhook-ами?</h3>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">0 ответов</div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="promo-block__footer">
                        <a href="https://toster.ru/"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=questions_all&utm_campaign=questions_postlist"
                            class="promo-block__footer-link promo-block__footer-link_selected" rel="nofollow">Все
                            вопросы</a>

                        <a href="http://qna.habr.com/help/about/"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=questions_add&utm_campaign=questions_postlist"
                            class="promo-block__footer-link" rel="nofollow">Задать вопрос</a>
                    </div>
                </div>
            </li>

            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485264">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/NiceDay/" class="post__user-info user-info"
                            title="Автор публикации">
                            <span class="default-image_mini default-image_lilac">
                                <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true"
                                    version="1.1" role="img">
                                    <path
                                        d="M21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.379 1.122-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.379-1.122 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5h-19zM15.598 12.385zM19.438 15.417l-.002-.005v-.001c-.875-2.226-2.484-3.054-3.445-3.549l-.273-.143c.029-.497-.025-1.034-.167-1.599l-.128.032.123-.044c-.765-2.152-1.757-2.585-2.632-2.967l-.006-.003-.535-2.121c.357-.065.628-.375.628-.752.001-.423-.342-.765-.765-.765s-.766.342-.766.765c0 .358.248.657.581.74l-.825 1.654-.014-.003-.024-.003c-1.053-.033-1.842.369-2.5.947-.633-.322-1.515-.729-2.158-1.814.107-.12.174-.276.174-.45 0-.375-.303-.678-.678-.678s-.678.303-.678.678.303.678.678.678l.221-.04c.416.597 1.09 1.181 1.347 2.828l-.072.091.104.081-.112-.067c-1.157 1.914-.793 4.248.207 5.37-.998 2.546-1.035 4.681-.097 5.868l.002.002.003.003c.119.162.313.233.524.233.189 0 .39-.057.559-.154.312-.179.441-.459.326-.713l-.12.054.119-.056c-.581-1.243-.474-2.713.314-4.37.4.131.778.208 1.145.234l.139.73c.264 1.418.514 2.757 1.297 4.006.132.264.453.387.777.387.122 0 .245-.018.357-.051.385-.116.591-.399.537-.738l-.129.021.125-.042c-.204-.606-.431-1.146-.649-1.67-.373-.894-.725-1.742-.891-2.737.407-.042.797-.129 1.161-.261.825.692 1.661 1.492 2.743 3.406h.001c.072.14.224.215.41.215.105 0 .222-.024.339-.073.365-.155.652-.531.477-1.006v-.001c-.432-1.849-1.426-2.778-2.428-3.547.162-.175.311-.366.442-.576.75.399 1.878 1.005 3.127 2.766l.047.067.011-.008c.151.156.317.24.48.24.096 0 .191-.027.279-.084.306-.194.439-.662.29-1.005zm-8.878-2.493c-.947 0-1.713-.767-1.713-1.713s.767-1.713 1.713-1.713c.947 0 1.713.767 1.713 1.713s-.767 1.713-1.713 1.713zm6.587 4.648l-.084.021v-.001l.084-.02zm-2.007-5.312zm.022 1.006zM11.225 11.604c0 .385-.312.697-.697.697s-.697-.312-.697-.697c0-.385.312-.697.697-.697s.697.312.697.697z" />
                                    </svg>
                            </span>
                            <span class="user-info__nickname user-info__nickname_small">NiceDay</span>
                        </a>

                        <span class="post__time">24 января 2020 в 16:27</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/485264/" class="post__title_link">Как выглядит zip-архив и что
                            мы с этим можем сделать. Часть 4 — Чтение архива</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/crazydev/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Ненормальное программирование'); }">Ненормальное
                                программирование</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html"><i>Продолжение цикла о Zip-архивах и PHP. Предыдущие
                                статьи: <a href="https://habr.com/ru/post/471066/">Часть 1</a>, <a
                                    href="https://habr.com/ru/post/472966/">Часть 2</a>, <a
                                    href="https://habr.com/ru/post/484520/">Часть 3</a></i> <br>
                            <br>
                            Доброго времени суток, дорогие читатели.<br>
                            На этот раз я хотел бы представить, наверное, заключительную часть цикла о Zip-архивах и
                            PHP.<br>
                            <br>
                            В этой статье я покажу как прочесть уже существующий архив и для примера мы возьмем
                            <b>photos.zip</b> из <a href="https://habr.com/ru/post/484520/">прошлой статьи</a>. Чтоб не
                            повторять все процедуры воспользуемся готовым — <a
                                href="https://github.com/userqq/images/raw/master/photos.zip">https://github.com/userqq/images/raw/master/photos.zip</a>.<br>
                            <br>
                            А теперь давайте на минутку отвлечемся и вспомним, из чего состоит наш архив: сначала идет
                            набор данных упакованных файлов, где каждый упакованный файл предварён структурой Local File
                            Header (LFH), после всех данных у нас идет набор структур Central Directory File Header
                            (CDFH) — это такое оглавление по нашему архиву, в котором перечислены все элементы и позиции
                            их смещения относительно начала файла. А завершает архив End Of Central Directory Record
                            (EOCD) — тут указана позиция начала структур CDFH, их количество и общая длина в байтах.
                            Поэтому архив следует читать с конца, чтоб сначала найти EOCD, потом прочесть структуры CDFH
                            и таким образом получить список файлов в архиве.<br>
                            <br>
                            <i>FYI: А некоторые форматы, например JPEG, читаются с начала. Поэтому мы можем склеить
                                картинку с архивом, даже банально через <b>cat image.jpeg archive.zip &gt;
                                    imagearchive.jpeg</b>, не потеряв функционала. Браузеры и приложения для просмотра
                                картинок будут без каких-либо проблем показывать нам картинку. В то время как любое
                                приложение для чтения zip-архивов, будь то 7z или unzip, сможет преспокойно работать с
                                файлом как с архивом. Например, вот — <a
                                    href="https://github.com/userqq/images/blob/master/jpegarchive.jpg">https://github.com/userqq/images/blob/master/jpegarchive.jpg</a>
                                (Осторожно, эта штука весит около 20мб, поэтому не советую открывать с телефонов или
                                если вам дорог трафик). Таким образом, если вы знаете хостинг картинок, на котором
                                изображения не перекодируются и не обрезаются, вы можете заливать туда не только
                                картинки:) Хотя, мне кажется, сейчас таких уже не найти.</i><br></div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/post/485264/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_" data-post-type="publish_ugc_ru,h_84,h_260,f_develop"
                            id="infopanel_post_485264">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 12: &uarr;12 и &darr;0">+12</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_84,h_260,f_develop" data-type="2" data-id="485264"
                                    data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">56</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">2,3k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/485264/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">4</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485376">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/edpopov/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/038/ed9/3be/038ed93beb47c4f72e01a64bd98f5a36.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">edpopov</span>
                        </a>

                        <span class="post__time">24 января 2020 в 15:32</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/485376/" class="post__title_link">Как сделать фронтенд в три
                            раза быстрее и когда применять команды вместо репозиториев? Видео</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/magento/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Magento'); }">Magento</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">
                            <p>В Харькове прошёл Magento-митап, и на нём прозвучали доклады Робина ван Раана, Александра
                                Шкурко и Максима Грома. В них много полезного. Ловите.</p><br>
                            <p><strong>Робин ван Раан</strong> рассказал о новейших практиках оптимизации RequireJS. С
                                их помощью фронтенд сайта можно ускорить в 3 раза!</p><br>
                            <div class="oembed">
                                <div>
                                    <div
                                        style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2493%;">
                                        <iframe
                                            src="https://www.youtube.com/embed/cKpnHknrBlQ?rel=0&amp;showinfo=1&amp;hl=en-US"
                                            style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;"
                                            allowfullscreen scrolling="no"></iframe></div>
                                </div>
                            </div><br>
                            <p><strong>Александр Шкурко</strong> рассказал, в каких случаях лучше использовать команды
                                вместо репозиториев в Magento 2. Всё это проиллюстрировано лучшими, на мой взгляд,
                                картинками!</p><br>
                            <div class="oembed">
                                <div>
                                    <div
                                        style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2493%;">
                                        <iframe
                                            src="https://www.youtube.com/embed/bF_uHV0nNJQ?rel=0&amp;showinfo=1&amp;hl=en-US"
                                            style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;"
                                            allowfullscreen scrolling="no"></iframe></div>
                                </div>
                            </div><br>
                            <p><strong>Максим Гром</strong> коснулся скользкой темы ныряния в Magento DI. Многим это
                                тоже будет полезно.</p><br>
                            <div class="oembed">
                                <div>
                                    <div
                                        style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2493%;">
                                        <iframe
                                            src="https://www.youtube.com/embed/eXCXNV67Thc?rel=0&amp;showinfo=1&amp;hl=en-US"
                                            style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;"
                                            allowfullscreen scrolling="no"></iframe></div>
                                </div>
                            </div>
                        </div>


                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_" data-post-type="publish_ugc_ru,h_260,h_21046,f_develop"
                            id="infopanel_post_485376">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 12: &uarr;7 и &darr;5">+2</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_260,h_21046,f_develop" data-type="2"
                                    data-id="485376" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">24</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">2,7k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/485376/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">3</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_484788">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/meawqq/" class="post__user-info user-info"
                            title="Автор публикации">
                            <span class="default-image_mini default-image_lilac">
                                <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true"
                                    version="1.1" role="img">
                                    <path
                                        d="M21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.379 1.122-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.379-1.122 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5h-19zM15.598 12.385zM19.438 15.417l-.002-.005v-.001c-.875-2.226-2.484-3.054-3.445-3.549l-.273-.143c.029-.497-.025-1.034-.167-1.599l-.128.032.123-.044c-.765-2.152-1.757-2.585-2.632-2.967l-.006-.003-.535-2.121c.357-.065.628-.375.628-.752.001-.423-.342-.765-.765-.765s-.766.342-.766.765c0 .358.248.657.581.74l-.825 1.654-.014-.003-.024-.003c-1.053-.033-1.842.369-2.5.947-.633-.322-1.515-.729-2.158-1.814.107-.12.174-.276.174-.45 0-.375-.303-.678-.678-.678s-.678.303-.678.678.303.678.678.678l.221-.04c.416.597 1.09 1.181 1.347 2.828l-.072.091.104.081-.112-.067c-1.157 1.914-.793 4.248.207 5.37-.998 2.546-1.035 4.681-.097 5.868l.002.002.003.003c.119.162.313.233.524.233.189 0 .39-.057.559-.154.312-.179.441-.459.326-.713l-.12.054.119-.056c-.581-1.243-.474-2.713.314-4.37.4.131.778.208 1.145.234l.139.73c.264 1.418.514 2.757 1.297 4.006.132.264.453.387.777.387.122 0 .245-.018.357-.051.385-.116.591-.399.537-.738l-.129.021.125-.042c-.204-.606-.431-1.146-.649-1.67-.373-.894-.725-1.742-.891-2.737.407-.042.797-.129 1.161-.261.825.692 1.661 1.492 2.743 3.406h.001c.072.14.224.215.41.215.105 0 .222-.024.339-.073.365-.155.652-.531.477-1.006v-.001c-.432-1.849-1.426-2.778-2.428-3.547.162-.175.311-.366.442-.576.75.399 1.878 1.005 3.127 2.766l.047.067.011-.008c.151.156.317.24.48.24.096 0 .191-.027.279-.084.306-.194.439-.662.29-1.005zm-8.878-2.493c-.947 0-1.713-.767-1.713-1.713s.767-1.713 1.713-1.713c.947 0 1.713.767 1.713 1.713s-.767 1.713-1.713 1.713zm6.587 4.648l-.084.021v-.001l.084-.02zm-2.007-5.312zm.022 1.006zM11.225 11.604c0 .385-.312.697-.697.697s-.697-.312-.697-.697c0-.385.312-.697.697-.697s.697.312.697.697z" />
                                    </svg>
                            </span>
                            <span class="user-info__nickname user-info__nickname_small">meawqq</span>
                        </a>

                        <span class="post__time">23 января 2020 в 13:54</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/company/zadarma/blog/484788/" class="post__title_link">Больше
                            функций для своей системы: интеграция телефонии и CRM/ERP/Helpdesk. Что, как и почему?</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/company/zadarma/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Блог компании Zadarma'); }">Блог
                                компании Zadarma</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/api/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'API'); }">API</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/crm/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'CRM-системы'); }">CRM-системы</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/startuprise/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Развитие стартапа'); }">Развитие
                                стартапа</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">Любая компания стремится к росту — менеджеры к новым
                            клиентам и большим доходам, а разработчики систем автоматизации — к увеличению важных и
                            полезных функций сервисов. <br>
                            <br>
                            И их цели связаны между собой. Как минимум тем, что большинство подобных разработок помогают
                            зарабатывать — продавать и/или общаться с клиентами. Так как одним имейлом/чатом/тикетом сыт
                            не будешь, продают в том числе и по телефону. И для того, чтобы не использовать несколько
                            сервисов (отдельно CRM, отдельно телефонию) и существует интеграция. <br>
                            <br>
                            Вот о том, как её настроить и пойдёт речь ниже.<br>
                            <br>
                            <img src="https://habrastorage.org/webt/zt/dh/cj/ztdhcjk0yumhnfo0eogfrwhkxxw.png"
                                alt="image"><br>
                            <br></div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/company/zadarma/blog/484788/#habracut">Читать дальше</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_"
                            data-post-type="publish_corp_ru,c_zadarma,h_260,h_17690,h_17739,h_20722,f_develop,f_management"
                            id="infopanel_post_484788">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 16: &uarr;15 и &darr;1">+14</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_corp_ru,c_zadarma,h_260,h_17690,h_17739,h_20722,f_develop,f_management"
                                    data-type="2" data-id="484788" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">31</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">1,6k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/company/zadarma/blog/484788/#comments"
                                    class="post-stats__comments-link" rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">9</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item">

                <div class="promo-block promo-block_freelansim-tasks">
                    <h2 class="promo-block__header">

                        <a href="http://freelance.habr.com/" target="_blank"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=block_name&utm_campaign=tasks_postlist"
                            class="promo-block__title-link" rel="nofollow">Заказы</a>
                        <a href="http://freelance.habr.com/" target="_blank"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=block_logo&utm_campaign=tasks_postlist"
                            class="promo-block__header-logo icon-svg_logo-freelansim" rel="nofollow">
                            <svg class="icon-svg" height="22" viewBox="0 0 152 22" width="152"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m14.8499 17.0001-5.10399-7.72199 5.05999-7.766h-3.718l-3.38799 5.28-3.344-5.28h-3.849996l5.059996 7.7-5.103996 7.78799h3.761996l3.388-5.302 3.40999 5.302z" />
                                <path
                                    d="m21.3494 5.36211c-2.97 0-4.664 1.628-4.972 3.586h2.992c.176-.594.748-1.1 1.848-1.1 1.078 0 1.87.55 1.87 1.606v.528h-2.486c-2.904 0-4.664 1.34199-4.664 3.67399 0 2.288 1.76 3.608 3.96 3.608 1.474 0 2.662-.572 3.366-1.496v1.232h2.97v-7.43599c0-2.772-1.958-4.202-4.884-4.202zm-.572 9.41599c-.99 0-1.628-.484-1.628-1.276 0-.814.704-1.298 1.694-1.298h2.244v.506c0 1.32-1.078 2.068-2.31 2.068z" />
                                <path
                                    d="m35.1339 5.82411c-1.584 0-2.882.572-3.718 1.738.22-2.134 1.078-3.19 3.234-3.52l4.334-.638v-2.794003l-4.642.770003c-4.488.748-5.874 3.74-5.874 8.73399 0 4.488 2.178 7.15 6.028 7.15 3.454 0 5.588-2.64 5.588-5.808 0-3.40999-1.98-5.63199-4.95-5.63199zm-.792 8.75599c-1.672 0-2.596-1.342-2.596-3.146 0-1.73799.968-2.99199 2.618-2.99199 1.606 0 2.508 1.298 2.508 3.01399 0 1.716-.88 3.124-2.53 3.124z" />
                                <path
                                    d="m48.6512 5.36211c-1.672 0-2.75.726-3.322 1.584v-1.32h-3.08v15.57599h3.212v-5.302c.572.792 1.65 1.364 3.102 1.364 2.794 0 5.016-2.2 5.016-5.94 0-3.80599-2.222-5.96199-4.928-5.96199zm-.77 9.12999c-1.496 0-2.486-1.21-2.486-3.124v-.088c0-1.91399.99-3.14599 2.486-3.14599s2.464 1.254 2.464 3.18999c0 1.936-.968 3.168-2.464 3.168z" />
                                <path
                                    d="m69.2214 2.65611v-1.584h-1.914v1.584c-3.85.066-7.084 2.354-7.084 6.512 0 4.13599 3.234 6.42399 7.084 6.48999v1.584h1.914v-1.584c3.85-.066 7.084-2.354 7.084-6.48999 0-4.158-3.234-6.446-7.084-6.512zm-1.914 11.24199c-3.036-.066-5.104-1.848-5.104-4.72999 0-2.904 2.068-4.686 5.104-4.752zm1.914 0v-9.48199c3.036.066 5.104 1.848 5.104 4.752 0 2.88199-2.068 4.66399-5.104 4.72999z" />
                                <path
                                    d="m84.4497 5.67011c-1.914 0-3.08.88-3.63 1.826v-1.584h-1.826v15.28999h1.892v-5.566c.528.814 1.716 1.606 3.498 1.606 2.552 0 5.06-1.87 5.06-5.786 0-3.89399-2.486-5.78599-4.994-5.78599zm-.242 9.85599c-2.046 0-3.388-1.562-3.388-4.026v-.088c0-2.46399 1.342-4.02599 3.388-4.02599 1.98 0 3.3 1.65 3.3 4.06999 0 2.42-1.32 4.07-3.3 4.07z" />
                                <path
                                    d="m99.6017 5.91211-5.6541 8.16199v-8.16199h-1.8699v11.08799h1.8699l5.6541-8.16199v8.16199h1.8703v-11.08799z" />
                                <path
                                    d="m106.271 5.91211-.572 6.79799c-.154 1.914-.55 2.618-1.936 2.618h-.308v1.716h.528c2.266 0 3.3-1.188 3.542-4.202l.44-5.23599h4.07v9.39399h1.892v-11.08799z" />
                                <path
                                    d="m121.394 5.67011c-2.53 0-4.07 1.43-4.422 3.146h1.826c.308-.814 1.1-1.474 2.552-1.474 1.43 0 2.508.77 2.508 2.31v.74799h-2.948c-2.706 0-4.356 1.298-4.356 3.432 0 2.112 1.672 3.41 3.828 3.41 1.408 0 2.728-.528 3.564-1.562v1.32h1.782v-7.34799c0-2.486-1.738-3.982-4.334-3.982zm-.77 9.92199c-1.232 0-2.156-.616-2.156-1.782 0-1.188 1.034-1.804 2.552-1.804h2.838v.814c0 1.694-1.474 2.772-3.234 2.772z" />
                                <path
                                    d="m136.293 5.91211v4.46599h-5.478v-4.46599h-1.892v11.08799h1.892v-4.906h5.478v4.906h1.892v-11.08799z" />
                                <path
                                    d="m146.09 15.5261c-2.002 0-3.322-1.65-3.322-4.07 0-2.39799 1.276-4.06999 3.3-4.06999 1.76 0 2.574 1.144 2.86 2.068h1.892c-.286-1.76-1.804-3.784-4.752-3.784-3.19 0-5.236 2.464-5.236 5.78599 0 3.388 2.09 5.786 5.236 5.786 2.75 0 4.51-1.848 4.752-3.828h-1.892c-.242.946-.99 2.112-2.838 2.112z" />
                                </svg>

                        </a>
                    </h2>

                    <div class="promo-block__content">
                        <ul class="content-list content-list_promo">
                            <li class="content-list__item content-list__item_promo">
                                <a href="http://freelance.habr.com/tasks/286750" class="promo-item"
                                    data-utm="?utm_source=tm_habrahabr&utm_medium=tm_block&utm_content=task&utm_campaign=tasks_postlist">
                                    <div class="promo-item__wrap">
                                        <span class="promo-item__title promo-item__title_hovered">Canvas-анимация</span>
                                        <div class="promo-item__attrs">
                                            <span class="promo-item__attrs-item">1 отклик</span>
                                            <span class="promo-item__attrs-item">27 просмотров</span>
                                        </div>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">
                                        <div class="promo-item__amount promo-item__amount_rur">
                                            <span>15000</span>
                                        </div>
                                        <span class="promo-item__per">за проект</span>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="http://freelance.habr.com/tasks/286748" class="promo-item"
                                    data-utm="?utm_source=tm_habrahabr&utm_medium=tm_block&utm_content=task&utm_campaign=tasks_postlist">
                                    <div class="promo-item__wrap">
                                        <span class="promo-item__title promo-item__title_hovered">Вэб приложение для
                                            управления ордерами на криптобирже Binance</span>
                                        <div class="promo-item__attrs">
                                            <span class="promo-item__attrs-item">2 отклика</span>
                                            <span class="promo-item__attrs-item">24 просмотра</span>
                                        </div>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">
                                        <div class="promo-item__amount promo-item__amount_rur">
                                            <span>22000</span>
                                        </div>
                                        <span class="promo-item__per">за проект</span>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="http://freelance.habr.com/tasks/286744" class="promo-item"
                                    data-utm="?utm_source=tm_habrahabr&utm_medium=tm_block&utm_content=task&utm_campaign=tasks_postlist">
                                    <div class="promo-item__wrap">
                                        <span class="promo-item__title promo-item__title_hovered">OCR: распознавание
                                            водительских прав</span>
                                        <div class="promo-item__attrs">
                                            <span class="promo-item__attrs-item">3 отклика</span>
                                            <span class="promo-item__attrs-item">34 просмотра</span>
                                        </div>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">
                                        <div class="promo-item__amount promo-item__amount_rur">
                                            <span>20000</span>
                                        </div>
                                        <span class="promo-item__per">за проект</span>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="http://freelance.habr.com/tasks/286740" class="promo-item"
                                    data-utm="?utm_source=tm_habrahabr&utm_medium=tm_block&utm_content=task&utm_campaign=tasks_postlist">
                                    <div class="promo-item__wrap">
                                        <span class="promo-item__title promo-item__title_hovered">Опытный PHP
                                            программист для работы с AST</span>
                                        <div class="promo-item__attrs">
                                            <span class="promo-item__attrs-item">4 отклика</span>
                                            <span class="promo-item__attrs-item">29 просмотров</span>
                                        </div>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">
                                        <div class="promo-item__amount promo-item__amount_rur">
                                            <span>1000</span>
                                        </div>
                                        <span class="promo-item__per">за проект</span>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a href="http://freelance.habr.com/tasks/286736" class="promo-item"
                                    data-utm="?utm_source=tm_habrahabr&utm_medium=tm_block&utm_content=task&utm_campaign=tasks_postlist">
                                    <div class="promo-item__wrap">
                                        <span class="promo-item__title promo-item__title_hovered">Разработка таблиц в
                                            Access</span>
                                        <div class="promo-item__attrs">
                                            <span class="promo-item__attrs-item">2 отклика</span>
                                            <span class="promo-item__attrs-item">19 просмотров</span>
                                        </div>
                                    </div>

                                    <div class="promo-item__aside promo-item__aside_hovered">
                                        <div class="promo-item__amount promo-item__amount_rur">
                                            <span>5000</span>
                                        </div>
                                        <span class="promo-item__per">за проект</span>
                                    </div>
                                </a>

                            </li>
                        </ul>
                    </div>

                    <div class="promo-block__footer">
                        <a href="http://freelance.habr.com/tasks/"
                            class="promo-block__footer-link promo-block__footer-link_selected"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=tasks_all&utm_campaign=tasks_postlist"
                            target="_blank" rel="nofollow">Все заказы</a>
                        <a href="http://freelance.habr.com/info/pricing/"
                            data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=task_add&utm_campaign=tasks_postlist"
                            class="promo-block__footer-link" target="_blank">Разместить заказ</a>
                    </div>
                </div>
            </li>
            <li class="content-list__item content-list__item_post shortcuts_item" id="post_484520">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/NiceDay/" class="post__user-info user-info"
                            title="Автор публикации">
                            <span class="default-image_mini default-image_lilac">
                                <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true"
                                    version="1.1" role="img">
                                    <path
                                        d="M21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.379 1.122-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.379-1.122 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5h-19zM15.598 12.385zM19.438 15.417l-.002-.005v-.001c-.875-2.226-2.484-3.054-3.445-3.549l-.273-.143c.029-.497-.025-1.034-.167-1.599l-.128.032.123-.044c-.765-2.152-1.757-2.585-2.632-2.967l-.006-.003-.535-2.121c.357-.065.628-.375.628-.752.001-.423-.342-.765-.765-.765s-.766.342-.766.765c0 .358.248.657.581.74l-.825 1.654-.014-.003-.024-.003c-1.053-.033-1.842.369-2.5.947-.633-.322-1.515-.729-2.158-1.814.107-.12.174-.276.174-.45 0-.375-.303-.678-.678-.678s-.678.303-.678.678.303.678.678.678l.221-.04c.416.597 1.09 1.181 1.347 2.828l-.072.091.104.081-.112-.067c-1.157 1.914-.793 4.248.207 5.37-.998 2.546-1.035 4.681-.097 5.868l.002.002.003.003c.119.162.313.233.524.233.189 0 .39-.057.559-.154.312-.179.441-.459.326-.713l-.12.054.119-.056c-.581-1.243-.474-2.713.314-4.37.4.131.778.208 1.145.234l.139.73c.264 1.418.514 2.757 1.297 4.006.132.264.453.387.777.387.122 0 .245-.018.357-.051.385-.116.591-.399.537-.738l-.129.021.125-.042c-.204-.606-.431-1.146-.649-1.67-.373-.894-.725-1.742-.891-2.737.407-.042.797-.129 1.161-.261.825.692 1.661 1.492 2.743 3.406h.001c.072.14.224.215.41.215.105 0 .222-.024.339-.073.365-.155.652-.531.477-1.006v-.001c-.432-1.849-1.426-2.778-2.428-3.547.162-.175.311-.366.442-.576.75.399 1.878 1.005 3.127 2.766l.047.067.011-.008c.151.156.317.24.48.24.096 0 .191-.027.279-.084.306-.194.439-.662.29-1.005zm-8.878-2.493c-.947 0-1.713-.767-1.713-1.713s.767-1.713 1.713-1.713c.947 0 1.713.767 1.713 1.713s-.767 1.713-1.713 1.713zm6.587 4.648l-.084.021v-.001l.084-.02zm-2.007-5.312zm.022 1.006zM11.225 11.604c0 .385-.312.697-.697.697s-.697-.312-.697-.697c0-.385.312-.697.697-.697s.697.312.697.697z" />
                                    </svg>
                            </span>
                            <span class="user-info__nickname user-info__nickname_small">NiceDay</span>
                        </a>

                        <span class="post__time">23 января 2020 в 13:37</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/post/484520/" class="post__title_link">Как выглядит zip-архив и что
                            мы с этим можем сделать. Часть 3 — Практическое применение</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/crazydev/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Ненормальное программирование'); }">Ненормальное
                                программирование</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html"><i>Продолжение статьи <a
                                    href="https://habr.com/ru/post/472966/">Как выглядит zip-архив и что мы с этим можем
                                    сделать. Часть 2 — Data Descriptor и сжатие</a>.</i><br>
                            <br>
                            Дорогие читатели, я снова приветствую вас на передаче Нетрадиционное программирование на
                            PHP. Для понимания происходящего рекомендую ознакомиться с предыдущими двумя статьями о
                            zip-архивах: <a href="https://habr.com/ru/post/471066/">Как выглядит zip-архив и что мы с
                                этим можем сделать</a> и <a href="https://habr.com/ru/post/472966/">Как выглядит
                                zip-архив и что мы с этим можем сделать. Часть 2 — Data Descriptor и сжатие</a><br>
                            <br>
                            Ранее я рассказывал как создавать архивы используя только лишь код на PHP и не применяя
                            никакие библиотеки и расширения (в том числе и стандартное <a
                                href="https://www.php.net/manual/ru/book.zip.php">zip</a>), а так же упоминал некоторые
                            сценарии использования. Сегодня я постараюсь привести пример одного из таких сценариев.<br>
                            <br>
                            Мы будем хранить картинки в архиве на удаленном сервере, а при необходимости показывать
                            определенную картинку пользователю, не скачивая и не распаковывая архив, а получая с сервера
                            лишь данные самой, конкретно взятой картинки и ничего более (ну ладно, оверхед на заголовки
                            еще никто не отменял, но все же).<br></div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/post/484520/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_" data-post-type="publish_ugc_ru,h_84,h_260,f_develop"
                            id="infopanel_post_484520">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 16: &uarr;16 и &darr;0">+16</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_ugc_ru,h_84,h_260,f_develop" data-type="2" data-id="484520"
                                    data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">39</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">1,7k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/post/484520/#comments" class="post-stats__comments-link"
                                    rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">3</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_485124">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/AloneCoder/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/741/45e/bea/74145ebeab7f222cce402aed2683f9d7.png"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">AloneCoder</span>
                        </a>

                        <span class="post__time">23 января 2020 в 12:55</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/company/mailru/blog/485124/" class="post__title_link">Чистые тесты
                            на PHP и PHPUnit</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/company/mailru/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Блог компании Mail.ru Group'); }">Блог
                                компании Mail.ru Group</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/it_testing/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Тестирование IT-систем'); }">Тестирование
                                IT-систем</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/complete_code/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Совершенный код'); }">Совершенный
                                код</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/web_testing/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Тестирование веб-сервисов'); }">Тестирование
                                веб-сервисов</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list">
                        <li class="inline-list__item inline-list__item_post-type"><span class="post__type-label"
                                title="Перевод">Перевод</span></li>
                        <li class="inline-list__item inline-list__item_post-type"><span class="post__type-label"
                                title="Обучающий материал">Tutorial</span></li>
                    </ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">
                            <div style="text-align:center;"><img
                                    src="https://habrastorage.org/webt/jx/3y/zg/jx3yzg2jnznn0kwnk6oe6ikvlzw.jpeg"
                                    width="400"></div><br>
                            В экосистеме PHP существует много инструментов, обеспечивающих удобное тестирование на PHP.
                            Одним из самых известных является <a
                                href="https://github.com/sebastianbergmann/phpunit">PHPUnit</a>, это почти синоним
                            тестирования на этом языке. Однако о хороших методиках тестирования пишут не так много. Есть
                            много вариантов, для чего и когда писать тесты, какого рода тесты, и так далее. Но, честно
                            говоря, <b>не имеет смысла писать тест, если позднее вы не сможете его прочесть</b>.<br>
                            <br>
                            Тесты — это особая разновидность документации. Как <a
                                href="https://thephp.website/en/issue/real-life-tdd-php/">я ранее писал о TDD на
                                PHP</a>, тест всегда будет (или хотя бы должен) ясного говорить о том, в чём заключается
                            задача конкретной части кода.<br>
                            <br>
                            Если один тест не может выразить эту идею, то тест плохой.<br>
                            <br>
                            Я подготовил набор методик, которые станут подспорьем для PHP-разработчиков в написании
                            хороших, удобочитаемых и полезных тестов.<br>
                        </div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/company/mailru/blog/485124/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_"
                            data-post-type="publish_corp_ru,c_mailru,h_210,h_260,h_524,h_19279,f_develop"
                            id="infopanel_post_485124">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 35: &uarr;35 и &darr;0">+35</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_corp_ru,c_mailru,h_210,h_260,h_524,h_19279,f_develop"
                                    data-type="2" data-id="485124" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">121</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">6,9k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/company/mailru/blog/485124/#comments"
                                    class="post-stats__comments-link" rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">22</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_484728">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/narekmarkosyan/" class="post__user-info user-info"
                            title="Автор публикации">
                            <span class="default-image_mini default-image_pink">
                                <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true"
                                    version="1.1" role="img">
                                    <path
                                        d="M21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.379 1.122-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.379-1.122 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5h-19zM15.598 12.385zM19.438 15.417l-.002-.005v-.001c-.875-2.226-2.484-3.054-3.445-3.549l-.273-.143c.029-.497-.025-1.034-.167-1.599l-.128.032.123-.044c-.765-2.152-1.757-2.585-2.632-2.967l-.006-.003-.535-2.121c.357-.065.628-.375.628-.752.001-.423-.342-.765-.765-.765s-.766.342-.766.765c0 .358.248.657.581.74l-.825 1.654-.014-.003-.024-.003c-1.053-.033-1.842.369-2.5.947-.633-.322-1.515-.729-2.158-1.814.107-.12.174-.276.174-.45 0-.375-.303-.678-.678-.678s-.678.303-.678.678.303.678.678.678l.221-.04c.416.597 1.09 1.181 1.347 2.828l-.072.091.104.081-.112-.067c-1.157 1.914-.793 4.248.207 5.37-.998 2.546-1.035 4.681-.097 5.868l.002.002.003.003c.119.162.313.233.524.233.189 0 .39-.057.559-.154.312-.179.441-.459.326-.713l-.12.054.119-.056c-.581-1.243-.474-2.713.314-4.37.4.131.778.208 1.145.234l.139.73c.264 1.418.514 2.757 1.297 4.006.132.264.453.387.777.387.122 0 .245-.018.357-.051.385-.116.591-.399.537-.738l-.129.021.125-.042c-.204-.606-.431-1.146-.649-1.67-.373-.894-.725-1.742-.891-2.737.407-.042.797-.129 1.161-.261.825.692 1.661 1.492 2.743 3.406h.001c.072.14.224.215.41.215.105 0 .222-.024.339-.073.365-.155.652-.531.477-1.006v-.001c-.432-1.849-1.426-2.778-2.428-3.547.162-.175.311-.366.442-.576.75.399 1.878 1.005 3.127 2.766l.047.067.011-.008c.151.156.317.24.48.24.096 0 .191-.027.279-.084.306-.194.439-.662.29-1.005zm-8.878-2.493c-.947 0-1.713-.767-1.713-1.713s.767-1.713 1.713-1.713c.947 0 1.713.767 1.713 1.713s-.767 1.713-1.713 1.713zm6.587 4.648l-.084.021v-.001l.084-.02zm-2.007-5.312zm.022 1.006zM11.225 11.604c0 .385-.312.697-.697.697s-.697-.312-.697-.697c0-.385.312-.697.697-.697s.697.312.697.697z" />
                                    </svg>
                            </span>
                            <span class="user-info__nickname user-info__nickname_small">narekmarkosyan</span>
                        </a>

                        <span class="post__time">21 января 2020 в 09:06</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/company/citymobil/blog/484728/" class="post__title_link">Тайный
                            покупатель Ситимобила</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/company/citymobil/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Блог компании Ситимобил'); }">Блог
                                компании Ситимобил</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/mysql/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'MySQL'); }">MySQL</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list">
                        <li class="inline-list__item inline-list__item_post-type"><a
                                href="https://habr.com/ru/info/help/karma/#recovery" class="post__type-label"
                                title="Реабилитационный пост от пользователя с отрицательной кармой">Recovery Mode</a>
                        </li>
                    </ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html">Привет! Меня зовут Нарек Маркосян и я
                            backend-разработчик в компании «Ситимобил». Хочу рассказать вам о нашем закрытом
                            <b>Телеграм-боте «Тайный покупатель»</b>.<br />
                            <br />
                            <h2>Пролог</h2><br />
                            В Ситимобил никто не носит розовых очков, мы хорошо понимаем, что наш сервис не идеален,
                            поэтому мы всегда работаем над его улучшением. Проблемы клиентов могут быть связаны с
                            приложением, с расчетом цены, но чаще всего — с водителем.<br />
                            <br />
                            Мы любим своих водителей и стараемся сделать их работу более приятной и прибыльной, но из-за
                            одного недобросовестного водителя мы можем потерять несколько клиентов и тем самым лишить
                            заработка водителей, которые честно делают свою работу.<br />
                            <br />
                            По этой причине мы решили разработать инструмент для быстрого реагирования на жалобы,
                            связанные с водителями.<br />
                        </div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/company/citymobil/blog/484728/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_"
                            data-post-type="publish_corp_ru,c_citymobil,h_260,h_306,f_develop"
                            id="infopanel_post_484728">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter  voting-wjt__counter_negative"
                                        title="Всего голосов 41: &uarr;16 и &darr;25">–9</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_corp_ru,c_citymobil,h_260,h_306,f_develop" data-type="2"
                                    data-id="484728" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">7</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">3,3k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/company/citymobil/blog/484728/#comments"
                                    class="post-stats__comments-link" rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment" />
                                        </svg><span class="post-stats__comments-count"
                                        title="Читать комментарии">13</span>
                                </a>
                            </li>





                        </ul>

                    </footer>
                </article>


            </li>






            <li class="content-list__item content-list__item_post shortcuts_item" id="post_484738">

                <article class="post post_preview" lang="ru">
                    <header class="post__meta">
                        <a href="https://habr.com/ru/users/MaxRokatansky/" class="post__user-info user-info"
                            title="Автор публикации">
                            <img src="//habrastorage.org/getpro/habr/avatars/20b/563/58e/20b56358e782028495372afc0724d655.jpg"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span class="user-info__nickname user-info__nickname_small">MaxRokatansky</span>
                        </a>

                        <span class="post__time">20 января 2020 в 17:27</span>


                    </header>

                    <h2 class="post__title">
                        <a href="https://habr.com/ru/company/otus/blog/484738/" class="post__title_link">Пошаговое
                            руководство по настройке Laravel 6 в Google Cloud Run с непрерывной интеграцией</a>
                    </h2>

                    <ul class="post__hubs inline-list">
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/company/otus/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Блог компании OTUS. Онлайн-образование'); }">Блог
                                компании OTUS. Онлайн-образование</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/php/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'PHP'); }">PHP</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/programming/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Программирование'); }">Программирование</a>,
                        </li>
                        <li class="inline-list__item inline-list__item_hub">
                            <a href="https://habr.com/ru/hub/laravel/" class="inline-list__item-link hub-link "
                                rel="nofollow" title="Вы не подписаны на этот хаб"
                                onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', 'Laravel'); }">Laravel</a>
                        </li>
                    </ul>

                    <ul class="post__marks inline-list"></ul>

                    <div class="post__body post__body_crop ">
                        <div class="post__text post__text-html"><i>Всем привет! В преддверии старта курсов <a
                                    href="https://otus.pw/lkbE/">«Framework Laravel»</a> и <a
                                    href="https://otus.pw/dUJP/">«Backend-разработчик на PHP»</a>, продолжаем делиться
                                интересным материалом по теме. Поехали.</i><br>
                            <br>
                            <img src="https://habrastorage.org/webt/ov/jv/xo/ovjvxomg5yfcmdo7smpsubkpfzu.png"><br>
                            <hr><br>
                            За последние несколько лет популярность Laravel <a
                                href="https://trends.google.com/trends/explore?date=2014-10-22%202019-10-21%5E_%5Eamp%5E_%5Eq=laravel,symfony">резко
                                возросла</a>. Сообщество Laravel даже придерживается мнения, что Laravel сделал процесс
                            работы на PHP приятнее, по сравнению с той болью, которая была раньше. В Laravel 6 есть
                            несколько новых <a href="https://laracasts.com/series/whats-new-in-laravel-6">интересных
                                функций</a>. Получение супер-масштабируемого рабочего URL-адреса для вашего приложения
                            занимает часы, если не дни. А создание чего-то вроде Kubernetes – это тяжелейшая задача.
                            Именно в таких случаях Google Cloud Run выступает в лучшем свете, ведь с его помощью вы
                            можете получить рабочий HTTPs URL-адрес для любого из ваших контейнерных приложений в
                            считанные минуты. <br>
                            <br>
                            <a href="https://cloud.google.com/run/">Google Cloud Run</a> является бессерверным и
                            полностью управляется Google. Вы получаете супер-масштабирование, посекундную оплату, HTTPs
                            URL и собственный маппинг домена.<br>
                            <br>
                            Если вы хотите запустить stateless контейнеры, Cloud run – самый простой способ это сделать.
                            В этой статье я подробно расскажу, как заставить ваше приложение Laravel 6 работать на
                            Google cloud run с Continous Integration (CI).</div>

                        <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                            href="https://habr.com/ru/company/otus/blog/484738/#habracut">Читать дальше &rarr;</a>
                    </div>



                    <footer class="post__footer">
                        <ul class="post-stats  js-user_"
                            data-post-type="publish_corp_ru,c_otus,h_260,h_359,h_18812,f_develop"
                            id="infopanel_post_484738">
                            <li class="post-stats__item">
                                <div class="post-stats__result">

                                    <span class="post-stats__result-icon">
                                        <svg class="icon-svg_votes" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#counter-rating" />
                                            </svg>
                                    </span>

                                    <span class="post-stats__result-counter voting-wjt__counter_positive "
                                        title="Всего голосов 10: &uarr;9 и &darr;1">+8</span>
                                </div>
                            </li>
                            <li class="post-stats__item post-stats__item_bookmark">
                                <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                    data-post-type="publish_corp_ru,c_otus,h_260,h_359,h_18812,f_develop" data-type="2"
                                    data-id="484738" data-action="add"
                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                    onclick="posts_add_to_favorite(this);" disabled>
                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16">
                                            <use
                                                xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#book" />
                                            </svg><span class="bookmark__counter js-favs_count"
                                            title="Количество пользователей, добавивших публикацию в закладки">50</span></span>
                                </button>
                            </li>

                            <li class="post-stats__item post-stats__item_views">
                                <div class="post-stats__views" title="Количество просмотров">
                                    <svg class="icon-svg_views-count" width="21" height="12">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#eye" />
                                        </svg><span class="post-stats__views-count">1,8k</span>
                                </div>
                            </li>

                            <li class="post-stats__item post-stats__item_comments">
                                <a href="https://habr.com/ru/company/otus/blog/484738/#comments"
                                    class="post-stats__comments-link" rel="nofollow">
                                    <svg class="icon-svg_post-comments" width="16" height="16">
                                        <use
                                            xlink:href="https://habr.com/images/1580818753/common-svg-sprite.svg#comment">
                                    </svg><span class="post-stats__comments-text"
                                        title="Добавить комментарий">Комментировать</span>
                                </a>
                            </li>
                        </ul>
                    </footer>
                </article>
            </li>

        </ul>
        <div class="page__footer">
            <ul class="arrows-pagination">
                <li class="arrows-pagination__item">
                    <span class="arrows-pagination__item-link">&larr;&nbsp;сюда</span>
                </li>



                <li class="arrows-pagination__item">
                    <a class="arrows-pagination__item-link arrows-pagination__item-link_next" id="next_page"
                        href="/ru/hub/php/page2/" rel=""><span>туда</span>&nbsp;&rarr;</a>
                </li>
            </ul>

            <ul class="toggle-menu toggle-menu_pagination" id="nav-pagess">

                <li class="toggle-menu__item toggle-menu__item_pagination">
                    <span
                        class="toggle-menu__item-link toggle-menu__item-link_pagination toggle-menu__item-link_active">1</span>
                </li>


                <li class="toggle-menu__item toggle-menu__item_pagination">

                    <a href="/ru/hub/php/page2/" class="toggle-menu__item-link toggle-menu__item-link_pagination">2</a>

                </li>

                <li class="toggle-menu__item toggle-menu__item_pagination">

                    <a href="/ru/hub/php/page3/" class="toggle-menu__item-link toggle-menu__item-link_pagination">3</a>

                </li>

                <li class="toggle-menu__item toggle-menu__item_pagination">

                    <a href="/ru/hub/php/page4/" class="toggle-menu__item-link toggle-menu__item-link_pagination">4</a>

                </li>

                <li class="toggle-menu__item toggle-menu__item_pagination">

                    <a href="/ru/hub/php/page5/" class="toggle-menu__item-link toggle-menu__item-link_pagination">5</a>

                </li>

                <li class="toggle-menu__item toggle-menu__item_pagination">

                    <a href="/ru/hub/php/page6/" class="toggle-menu__item-link toggle-menu__item-link_pagination">6</a>

                </li>

                <li class="toggle-menu__item toggle-menu__item_pagination">

                    <a href="/ru/hub/php/page7/" class="toggle-menu__item-link toggle-menu__item-link_pagination">7</a>

                </li>

                <li class="toggle-menu__item toggle-menu__item_pagination">

                    <a href="/ru/hub/php/page8/" class="toggle-menu__item-link toggle-menu__item-link_pagination">8</a>

                </li>

                <li class="toggle-menu__item toggle-menu__item_pagination">

                    <a title="Последняя страница"
                        class="toggle-menu__item-link toggle-menu__item-link_pagination toggle-menu__item-link_bordered"
                        href="/ru/hub/php/page157/" rel="">
                        <span class="icon-svg icon-svg_arrow-last"><svg class="icon-svg" width="28" height="24"
                                viewBox="0 0 28 24">
                                <path
                                    d="M8.452 5.455l2.93 3.192c.89.969 1.335 1.361 2.225 1.909h-13.608v2.773h13.634c-.838.5-1.492 1.102-2.252 1.913l-2.93 3.192 2.276 1.964 7.588-8.452-7.588-8.452-2.276 1.961zM24.297 0h3.087v23.891h-3.087v-23.891z" />
                                </svg>
                        </span>
                    </a>

                </li>
            </ul>
        </div>

    </div>
</div>