<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="lang" content="{{ app()->getLocale() }}">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Стили habr -->
    <link href="https://dr.habracdn.net/habrcom/styles/1580818753/main.bundle.css" rel="stylesheet" media="all" />
</head>
<body>
<div class="layout">
    @include('layouts.header')
    
    <div class="layout__row layout__row_body">
        <div class="layout__cell layout__cell_body">
            <div class="column-wrapper column-wrapper_tabs js-sticky-wrapper">
                @include('layouts.content')
    
                @include('layouts.rightcol')
            </div>
        </div>
    </div>
</div>

@yield('content')
<script defer src="{{ mix('js/app.js') }}"></script>
</body>
</html>