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
                        <p class="sub-title">Login using your email address</p>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <form action="{{url('usercheck')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Email Address</label>
                                    </div>
                                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                                           placeholder="Enter your email address or username" required>
                                    @if($errors->any())
                                        <div class="help-block mt-2 text-danger">
                                            <strong>{{ $errors->first() }}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="brand-logo pt-1 text-center">
                        <p class="sub-title">Don't you have EscrowBear Account? <a href="#">Get Invited</a></p>
                    </div>
                    <div class="brand-logo pt-2 text-center">
                        <p class="sub-description">Please check that you are visiting the correct URL</p>
                    </div>
                    <div class="brand-logo pt-2 text-center">
                        <span class="sub-url">
                            <em class="ni ni-lock-fill"></em> https://escrowbear.com/login
                        </span>
                    </div>
                    <div class="footerDiv">
                        <div class="justify-content-center text-center detail-1">Earth's only HyperEscrow
                            <a href="#">Log in <em class="icon ni ni-arrow-to-right"></em> </a>
                        </div>
                        <ul class="nav nav-sm justify-content-center langDiv pt-2">
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
<script src="{{asset_url('assets/js/login.js?ver=2.2.0')}}"></script>
</body>
</html>
