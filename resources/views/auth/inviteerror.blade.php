<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Escrowbear') }}</title>

    <!-- Scripts -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('dashlite/assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('dashlite/assets/css/theme.css?ver=2.2.0')}}">
    @yield('style')
</head>
<body class="nk-body npc-crypto has-sidebar">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-block nk-block-middle wide-xs mx-auto">
                    <div class="nk-block-content nk-error-ld text-center">
                        <h1 class="nk-error-head">Error</h1>
                        <h3 class="nk-error-title">Oops! Why you’re here?</h3>
                        <p class="nk-error-text">You have to register with correct invite code.</p>
                        <a href="{{route('home')}}" class="btn btn-lg btn-primary mt-2">Back To Home</a>
                    </div>
                </div><!-- .nk-block -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
</div>
<script src="{{asset('dashlite/assets/js/bundle.js?ver=2.2.0')}}"></script>
<script src="{{asset('dashlite/assets/js/scripts.js?ver=2.2.0')}}"></script>
</body>
</html>
