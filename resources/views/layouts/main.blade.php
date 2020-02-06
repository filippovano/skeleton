<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="lang" content="{{ app()->getLocale() }}">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
@yield('content')
<script defer src="{{ mix('js/app.js') }}"></script>
</body>
</html>
