# Greensight Laravel Skeleton

## Установка

1. `cd /var/www/mysite.greensight.ru && git clone git@gitlab.com:greensight/laravel-skeleton.git master.mysite.greensight.ru`,
2. `cd master.mysite.greensight.ru && sudo chmod +x install/run.sh && ./install/run.sh`
3. Открываем .env и прописываем там доступы к базе и APP_NAME
4. `php artisan migrate`
5. Если планируется использовать Webpack Blank Project на фронтэнде, то запускаем скрипт `./install/frontend-wbp.sh` который поменяет лэйаут и удалит стандартный фронтэнд Laravel из корня
6. Создаем новый репозиторий в директории `/var/www/mysite.ru/master.mysite.greensight.ru`, либо копируем туда папку .git если репозиторий уже есть и не пустой. Во втором случае также нужно залить вручную все файлы из репы (обычно это верстка)
7. Копируем хуки скелетона в новую папку .git -  `cp -R install/hooks .git/ && sudo chmod -R +x .git/hooks/`
8. Настраиваем nginx если он еще не настроен. Есть простой конфиг-пример в install/nginx-example.conf
9. Настраиваем почту через mailtrap.io (инструкция [здесь](https://docs.google.com/document/d/1bQnXbw2sWzjG5QtFp4G63f5VyCHTNkL4MaluInI7xXw/edit) )
10. Обновляем вики

* mysite везде заменяем на название проекта

## Отличия от ванильного Laravel

### Timezone и Locale

config('app.timezone') = 'Europe/Moscow';
config('app.locale') = 'ru';

### Дополнительный общий .env

Переменные окружения читаются не только из .env файла в корне проекта, но и из .env файла в директории на уровень выше (если он есть)
Приоритет остается у переменных из локального файла. Упрощает управление этими переменными на тестовом с множеством площадок.
Реализация в `bootstrap/environment.php`.

### Автоматический APP_URL

По умолчанию в Laravel в .env APP_URL=http://localhost и предполагается, что на каждой копии приложения вручную будет выставлен нужный APP_URL в .env.
Для мультистейджа это не подходит, поэтому реализован механизм автоматического задания этой переменной равной `https://<директория в которой находится проект>`.
При необходимости её всё же можно переопределить в .env файле.
Паралельно добавлены еще `env('APP_SANDBOX')` и `config('app.sandbox')` содержащие то же самое значение, но без `https://`
Реализация в `bootstrap/environment.php`.

### Более полный .gitignore

Внесены всякие pdf-ки, архивы, служебные файлы IDEшек и служебных инструментов

### Lang файлы для русского

Для авторизации и регистрации.

### ratehub/laravel-newrelic

Пакет для более качественной интеграции с Newrelic 
В .env добавлено
NEWRELIC_THROW_IF_NOT_INSTALLED=false
NEWRELIC_NAME_PROVIDER="{controller}"

### Git hooks

Смотри директорию install/hooks

### jakub-onderka/php-var-dump-check

Добавлен пакет для автоматического поиска dd и dump через pre-commit хук

### Перенесены диски в config/filesystems.php

```php
'local' => [
    'driver' => 'local',
    'root' => app('path.app_storage'),
],
'public' => [
    'driver' => 'local',
    'root' => app('path.app_storage') . DIRECTORY_SEPARATOR . 'public',
    'url' => env('APP_URL').'/storage',
    'visibility' => 'public',
],
```

В app('path.app_storage') realpath('../app_storage') от корня проекта
Нужно это затем, чтобы все площадки использовали один общий файлсторадж.

### spatie/laravel-web-tinker

В local и dev окружениях доступен урл /tinker где можно что-то поотлаживать как в php artisan tinker, но в браузере.

### Envoy.blade.php

В нём настроены простейшие таски для отгрузки приложения на прод.
deploy = просто отгрузка
release = deploy + нотификации в телеграми и ньюрелик если эти вещи настроены

### barryvdh/laravel-debugbar

Отладочная панелька внизу браузера, показывает кучу полезной для отладки информации - напримир sql запросы.

### barryvdh/laravel-ide-helper"

Предоставляет команды для генерации файлов `.phpstorm.meta.php` и `_ide_helper.php` которые дают ide информацию для автокомплита фасадов и объектов из service container
Сгенерированные файлы уже присутствуют в репозитории. Их можно время от времени перегенировать, но при каждом изменении смысла нет - лишь ненужные конфликты при мержах.

### friendsofphp/php-cs-fixer

Библиотека реализующая автоисправление кодстайла используя pre-commit хук.
Конфиг лежит в .php_cs

### Заготовки для фронтэнда

В `resources/views/layouts` лежат лэйауты. По-умолчанию там есть лишь лэйаут main адаптированный под стандартный для Laravel фронтэнд.
В ходе установки запустив `./install/frontend-wbp.sh` можно поменять лэйаут на лэйаут для Webpack Blank Project
В нём реализованы уже все динамические подключения ассетов
Единственное что остается сделать - вызвать `frontend()->setPage('my-page')` в экшене контроллера страницы.

### Директория моделей

Модели перенесены из `app/` в `app/Models`, так они не смешиваются с другими служебными директориями в `app`.

### nunomaduro/phpinsights

Предоставляет в dev окружению команду `php artisan insights` предоставляющую статистику о вашем приложении.

### helpers.php

Создан и добавлен в автозагрузку файл `app/helpers.php` в который можно добавлять свои хэлперы.
Старайтесь не раздувать этот файл лишними хэлперами.

### Динамический robots.txt

Вместо содержимого файла `public/robots.txt` роботам выдается содержимое `resources/views/robotstxt/<env>.blade.php`
Если для текущего APP_ENV файла не найдено - выдается содержимое для dev. Файлы для dev и production уже есть и настроены.
Для того чтобы это всё работало необходимо наличие location в nginx

```
location = /robots.txt  {
   access_log off;
   log_not_found off;
   rewrite ^ /index.php last;
}
```