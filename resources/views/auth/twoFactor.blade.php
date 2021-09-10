<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EscrowBear') }}</title>

    <link rel="shortcut icon" href="{{asset_url('favicon.ico')}}">

    <!-- Scripts -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset_url('dashlite/assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset_url('dashlite/assets/css/theme.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset_url('assets/css/custom.css?ver=2.2.0')}}">
    @yield('style')
</head>
<body class="nk-body npc-crypto has-sidebar">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="login-header"></div>
            <div class="nk-content login-screen" id="loginScreen1">
                <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                    <div class="brand-logo pb-3 text-center">
                        <a href="{{route('home')}}" class="logo-link">
                            <img class="logo" src="{{asset_url('assets/img/home/mark.png')}}"/>
                        </a>
                    </div>
                    <div class="brand-logo pb-3 text-center">
                        <h3 class="title">Welcome to EscrowBear</h3>
                    </div>
                    <div class="brand-logo pb-2 text-center">
                        <p class="sub-title">Enter your password to login</p>
                    </div>
                    <div class="card card-bordered">
                        <div style="padding: 20px 0 0 30px;">
                            <em class="icon ni ni-arrow-left"></em> Signing in with {{Auth::user()->email}}
                        </div>
                        <div class="card-inner card-inner-lg">
                            <form action="{{ route('verify.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <em class="icon ni ni-laptop"></em>
                                    </div>
                                    @if($errors->any())
                                        <div class="help-block mt-2 text-danger">
                                            <strong>{{ $errors->first() }}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block">Log In</button>
                                    <p class="text-center pt-1"><a href="">Forgot Password?</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="brand-logo pt-1 text-center">
                        <div class="justify-content-center text-center sub-title">Earth's only HyperEscrow</div>
                    </div>
                    <div class="footerDiv">
                        <p class="sub-description text-center">Don't you have EscrowBear Account? <a href="#">Get
                                Invited</a></p>
                        <ul class="nav nav-sm justify-content-center langDiv">
                            <li class="nav-item dropup active current-page">
                                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link"
                                   data-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="language-list">
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="{{asset_url('dashlite/images/flags/english.png')}}" alt=""
                                                     class="language-flag">
                                                <span class="language-name">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="{{asset_url('dashlite/images/flags/spanish.png')}}" alt=""
                                                     class="language-flag">
                                                <span class="language-name">Español</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="{{asset_url('dashlite/images/flags/french.png')}}" alt=""
                                                     class="language-flag">
                                                <span class="language-name">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="{{asset_url('dashlite/images/flags/turkey.png')}}" alt=""
                                                     class="language-flag">
                                                <span class="language-name">Türkçe</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link">version 1.3</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">FAQ</a></li>
                        </ul>
                    </div>
                </div>


            </div>
            <!-- wrap @e -->
        </div>
    </div>
</div>
<script src="{{asset_url('dashlite/assets/js/bundle.js?ver=2.2.0')}}"></script>
<script src="{{asset_url('dashlite/assets/js/scripts.js?ver=2.2.0')}}"></script>
</body>
</html>
