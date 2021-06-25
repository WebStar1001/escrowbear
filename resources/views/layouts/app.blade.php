<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{asset_url('favicon.ico')}}">

    <meta name="description" content="Escrow website for Crypto Currency">

    <!-- Scripts -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset_url('dashlite/assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset_url('dashlite/assets/css/theme.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset_url('assets/css/custom.css?ver=2.2.0')}}">
    @yield('style')
</head>
<body class="nk-body npc-crypto bg-white has-sidebar no-touch nk-nio-theme">
<div class="nk-app-root">
    <div class="nk-header nk-header-fluid nk-header-fixed" style="z-index: 999999;min-height: 55px;">
        @include('layouts/partical/infoheader')
    </div>
    <!-- main @s -->
    <div class="nk-main ">
        <div class="nk-sidebar nk-sidebar-fixed" data-content="sidebarMenu" style="top:55px;">
            @include('layouts/partical/sidebar')
        </div>
        <div class="nk-wrap ">
            <div class="nk-header nk-header-fluid nk-header-fixed" style="top:55px;">
                @include('layouts/partical/header')
            </div>
            <div class="nk-content nk-content-fluid is-theme">
                @yield('content')
            </div>
            <div class="nk-footer nk-footer-fluid is-theme">
                @include('layouts/partical/footer')
            </div>
        </div>
    </div>
    <script src="{{asset_url('dashlite/assets/js/bundle.js?ver=2.2.0')}}"></script>
    <script src="{{asset_url('dashlite/assets/js/scripts.js?ver=2.2.0')}}"></script>
    @yield('script')
</div>
@include('layouts/partical/chatbot')
</body>
<script type="text/javascript">
    $('#currencySelector li a').click(function () {
        $('#currencySelector .nk-menu-icon img').attr('src', $(this).find('img').attr('src'));
        $('#currencySelector .nk-menu-text').text($(this).find('span').text());
    });
    $('#languageSelector li a').click(function () {
        $('#languageSelector .nk-menu-icon img').attr('src', $(this).find('img').attr('src'));
        $('#languageSelector .nk-menu-text').text($(this).find('span').text());
    });
</script>
</html>
