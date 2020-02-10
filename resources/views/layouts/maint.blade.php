<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="lang" content="{{ app()->getLocale() }}">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{--  jQuery  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    {{-- CSRF  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Стили habr --}}
    <style type="text/css">
        @font-face{font-family:'Fira Sans';font-style:normal;font-weight:500;src:url(/fonts/0/FiraSans/firaSans-medium.eot);src:local("Fira Sans Medium"),local("FiraSans-Medium"),url(/fonts/0/FiraSans/firaSans-medium.eot?#iefix) format("embedded-opentype"),url(/fonts/0/FiraSans/firaSans-medium.woff2) format("woff2"),url(/fonts/0/FiraSans/firaSans-medium.woff) format("woff"),url(/fonts/0/FiraSans/firaSans-medium.ttf) format("truetype")}
    </style>
    <link href="https://dr.habracdn.net/habrcom/styles/1580818753/main.bundle.css" rel="stylesheet" media="all" />
</head>
<body>
<div class="layout">
    @include('layouts.header')

    <div class="layout__row layout__row_body">
        <div class="layout__cell layout__cell_body">
            <div class="column-wrapper column-wrapper_tabs js-sticky-wrapper">
                {{-- @include('layouts.content') --}}
                <div class="content_left js-content_left">
                    @yield('content')
                </div>

                @include('layouts.rightcol')
            </div>
        </div>
    </div>
</div>

{{-- @yield('content') --}}
<script defer src="{{ mix('js/app.js') }}"></script>
</body>
</html>
