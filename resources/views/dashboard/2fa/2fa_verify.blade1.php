<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset_url('dashlite/assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset_url('dashlite/assets/css/theme.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset_url('assets/css/custom.css?ver=2.2.0')}}">
    @yield('style')
</head>
<body class="nk-body npc-crypto has-sidebar" theme="dark">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content">
                <div class="brand-logo pb-4 pt-5 text-center">
                    <a href="{{route('home')}}" class="logo-link">
                        <h2 class="logo">Escrowbear</h2>
                    </a>
                </div>
                <div class="nk-block">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8 ">
                            <div class="card">
                                <div class="card-header">Two Factor Authentication</div>
                                <div class="card-body">
                                    <p>Two factor authentication (2FA) strengthens access security by requiring two
                                        methods (also referred to as factors) to verify your identity. Two factor
                                        authentication protects against phishing, social engineering and password
                                        brute
                                        force attacks and secures your logins from attackers exploiting weak or
                                        stolen
                                        credentials.</p>

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
                                                   class="form-control col-md-4" type="text" required/>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Authenticate</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
