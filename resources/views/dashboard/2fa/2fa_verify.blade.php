<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EscrowBear') }}</title>

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
        <div class="nk-split nk-split-page nk-split-md">
            <!-- content @s -->
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                    <div class="brand-logo pb-4 text-center">
                        <a href="{{route('home')}}" class="logo-link">
                            <h2 class="logo">Escrowbear</h2>
                        </a>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Two Factor Authentication</h4>
                                    <div class="nk-block-des">
                                        <p>Two factor authentication (2FA) strengthens access security by requiring two
                                            methods (also referred to as factors) to verify your identity. Two factor
                                            authentication protects against phishing, social engineering and password
                                            brute
                                            force attacks and secures your logins from attackers exploiting weak or
                                            stolen
                                            credentials.</p>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            Enter the pin from Google Authenticator app:<br/><br/>
                            <form class="form-horizontal" action="{{ route('2faVerify') }}" method="POST">
                                {{ csrf_field() }}
                                <div
                                    class="form-group{{ $errors->has('one_time_password-code') ? ' has-error' : '' }}">
                                    <label for="one_time_password" class="control-label">One Time
                                        Password</label>
                                    <input id="one_time_password" name="one_time_password"
                                           class="form-control col-md-8" type="text" required/>
                                </div>
                                <button class="btn btn-primary text-right" type="submit">Authenticate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{asset_url('dashlite/images/slides/promo-a.png')}}" srcset="
                                         {{asset_url('dashlite//images/slides/promo-a2x.png')}} 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Escrowbear</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most
                                        completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{asset_url('dashlite/images/slides/promo-b.png')}}"
                                         srcset="{{asset_url('dashlite/images/slides/promo-b2x.png')}} 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Escrowbear</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most
                                        completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{asset_url('dashlite/images/slides/promo-c.png')}}"
                                         srcset="{{asset_url('dashlite/images/slides/promo-c2x.png')}} 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Escrowbear</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most
                                        completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                    </div><!-- .slider-init -->
                    <div class="slider-dots"></div>
                    <div class="slider-arrows"></div>
                </div><!-- .slider-wrap -->
            </div>
            <!-- wrap @e -->
        </div>
    </div>
</div>
<script src="{{asset_url('dashlite/assets/js/bundle.js?ver=2.2.0')}}"></script>
<script src="{{asset_url('dashlite/assets/js/scripts.js?ver=2.2.0')}}"></script>
</body>
</html>
