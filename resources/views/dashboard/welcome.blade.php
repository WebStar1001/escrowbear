@extends('layouts.app')
@section('style')
    <link id="skin-default" rel="stylesheet" href="{{asset_url('assets/css/croppie.min.css')}}">
@endsection
@section('content')
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                <div class="nk-block-head-content text-center">
                    <h2 class="nk-block-title fw-normal">Nice, {{Auth::user()->name}}!</h2>
                    <div class="nk-block-des">
                        <p>Welcome to our <strong>Escrowbear Dashboard</strong>. You are few steps away to complete your
                            profile. These are required to Escrow on our platform! Let’s start!</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-custom-s1 card-bordered">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <div class="card-inner-group h-100">
                                <div class="card-inner">
                                    <h5>Let’s Finish Registration</h5>
                                    <p>Only few minutes required to complete your registration and set up your
                                        account.</p>
                                </div>
                                <div class="card-inner">
                                    <ul class="list list-step">
                                        @if(Auth::user()->profile_path == '')
                                            <li class="list-step-current">Upload Profile Image</li>
                                            <li>Verify your identity (KYC)</li>
                                            <li>Secure your account</li>
                                        @else
                                            <li class="list-step-done">Upload Profile Image</li>
                                            @if(!Auth::user()->kycVerification)
                                                <li class="list-step-current">Verify your identity (KYC)</li>
                                                <li>Secure your account</li>
                                            @else
                                                <li class="list-step-done">Verify your identity (KYC)</li>
                                                @if(!Auth::user()->google2fa_enable)
                                                    <li class="list-step-current">Secure your account</li>
                                                @else
                                                    <li class="list-step-done">Secure your account</li>
                                                @endif
                                            @endif
                                        @endif
                                    </ul>
                                </div>
                                <div class="card-inner">
                                    <div class="align-center gx-3">
                                        @if(Auth::user()->profile_path == '')
                                            <div class="flex-item">
                                                <div class="progress progress-sm progress-pill w-12px">
                                                    <div class="progress-bar" data-progress="0"></div>
                                                </div>
                                            </div>
                                            <div class="flex-item">
                                                <span class="sub-text sub-text-sm text-soft">
                                                    0/3 Completed
                                                </span>
                                            </div>
                                        @elseif(!Auth::user()->kycVerification)
                                            <div class="flex-item">
                                                <div class="progress progress-sm progress-pill w-120px">
                                                    <div class="progress-bar" data-progress="33.3"></div>
                                                </div>
                                            </div>
                                            <div class="flex-item">
                                                <span class="sub-text sub-text-sm text-soft">
                                                    1/3 Completed
                                                </span>
                                            </div>
                                        @elseif(!Auth::user()->google2fa_enable)
                                            <div class="flex-item">
                                                <div class="progress progress-sm progress-pill w-120px">
                                                    <div class="progress-bar" data-progress="66.6"></div>
                                                </div>
                                            </div>
                                            <div class="flex-item">
                                                <span class="sub-text sub-text-sm text-soft">
                                                    2/3 Completed
                                                </span>
                                            </div>
                                        @elseif(Auth::user()->google2fa_enable)
                                            <div class="flex-item">
                                                <div class="progress progress-sm progress-pill w-120px">
                                                    <div class="progress-bar" data-progress="100"></div>
                                                </div>
                                            </div>
                                            <div class="flex-item">
                                                <span class="sub-text sub-text-sm text-soft">
                                                    3/3 Completed
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-8">
                            <div class="card-inner card-inner-lg h-100">

                                @if(Auth::user()->profile_path == '')
                                    <div class="nk-block-content">
                                        <div class="nk-block-content-head">
                                            <h4>Profile Upload</h4>
                                            <span class="sub-text sub-text-sm text-soft">
                                                Profile picture must be 200px * 200px
                                            </span>
                                        </div>
                                        <form method="post" action="{{route('upload-profile')}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="user-avatar xl bg-primary">
                                                        <img src="{{asset_url('dashlite/images/avatar/blank.png')}}"
                                                             id="profilePreview"/>
                                                        <div class="status dot dot-lg dot-success"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="default-06">Default File
                                                            Upload</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                       id="profileImage" name="profile" required>
                                                                <label class="custom-file-label" for="customFile">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3 justify-content-end">
                                                @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        <strong>Whoops!</strong> There were some problems with your
                                                        input.
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <button type="submit" class="btn btn-lg btn-primary">Upload</button>
                                            </div>
                                        </form>
                                        @elseif(!Auth::user()->kycVerification)
                                            <div class="align-center flex-wrap flex-md-nowrap g-3 h-100">
                                                <div
                                                    class="nk-block-image w-200px flex-shrink-0 order-first order-md-last">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114 113.9">
                                                        <path
                                                            d="M87.84,110.34l-48.31-7.86a3.55,3.55,0,0,1-3.1-4L48.63,29a3.66,3.66,0,0,1,4.29-2.8L101.24,34a3.56,3.56,0,0,1,3.09,4l-12.2,69.52A3.66,3.66,0,0,1,87.84,110.34Z"
                                                            transform="translate(-4 -2.1)" fill="#c4cefe"/>
                                                        <path
                                                            d="M33.73,105.39,78.66,98.1a3.41,3.41,0,0,0,2.84-3.94L69.4,25.05a3.5,3.5,0,0,0-4-2.82L20.44,29.51a3.41,3.41,0,0,0-2.84,3.94l12.1,69.11A3.52,3.52,0,0,0,33.73,105.39Z"
                                                            transform="translate(-4 -2.1)" fill="#c4cefe"/>
                                                        <rect x="22" y="17.9" width="66" height="88" rx="3" ry="3"
                                                              fill="#6576ff"/>
                                                        <rect x="31" y="85.9" width="48" height="10" rx="1.5" ry="1.5"
                                                              fill="#fff"/>
                                                        <rect x="31" y="27.9" width="48" height="5" rx="1" ry="1"
                                                              fill="#e3e7fe"/>
                                                        <rect x="31" y="37.9" width="23" height="3" rx="1" ry="1"
                                                              fill="#c4cefe"/>
                                                        <rect x="59" y="37.9" width="20" height="3" rx="1" ry="1"
                                                              fill="#c4cefe"/>
                                                        <rect x="31" y="45.9" width="23" height="3" rx="1" ry="1"
                                                              fill="#c4cefe"/>
                                                        <rect x="59" y="45.9" width="20" height="3" rx="1" ry="1"
                                                              fill="#c4cefe"/>
                                                        <rect x="31" y="52.9" width="48" height="3" rx="1" ry="1"
                                                              fill="#e3e7fe"/>
                                                        <rect x="31" y="60.9" width="23" height="3" rx="1" ry="1"
                                                              fill="#c4cefe"/>
                                                        <path
                                                            d="M98.5,116a.5.5,0,0,1-.5-.5V114H96.5a.5.5,0,0,1,0-1H98v-1.5a.5.5,0,0,1,1,0V113h1.5a.5.5,0,0,1,0,1H99v1.5A.5.5,0,0,1,98.5,116Z"
                                                            transform="translate(-4 -2.1)" fill="#9cabff"/>
                                                        <path
                                                            d="M16.5,85a.5.5,0,0,1-.5-.5V83H14.5a.5.5,0,0,1,0-1H16V80.5a.5.5,0,0,1,1,0V82h1.5a.5.5,0,0,1,0,1H17v1.5A.5.5,0,0,1,16.5,85Z"
                                                            transform="translate(-4 -2.1)" fill="#9cabff"/>
                                                        <path
                                                            d="M7,13a3,3,0,1,1,3-3A3,3,0,0,1,7,13ZM7,8a2,2,0,1,0,2,2A2,2,0,0,0,7,8Z"
                                                            transform="translate(-4 -2.1)" fill="#9cabff"/>
                                                        <path
                                                            d="M113.5,71a4.5,4.5,0,1,1,4.5-4.5A4.51,4.51,0,0,1,113.5,71Zm0-8a3.5,3.5,0,1,0,3.5,3.5A3.5,3.5,0,0,0,113.5,63Z"
                                                            transform="translate(-4 -2.1)" fill="#9cabff"/>
                                                        <path
                                                            d="M107.66,7.05A5.66,5.66,0,0,0,103.57,3,47.45,47.45,0,0,0,85.48,3h0A5.66,5.66,0,0,0,81.4,7.06a47.51,47.51,0,0,0,0,18.1,5.67,5.67,0,0,0,4.08,4.07,47.57,47.57,0,0,0,9,.87,47.78,47.78,0,0,0,9.06-.87,5.66,5.66,0,0,0,4.08-4.09A47.45,47.45,0,0,0,107.66,7.05Z"
                                                            transform="translate(-4 -2.1)" fill="#2ec98a"/>
                                                        <path
                                                            d="M100.66,12.81l-1.35,1.47c-1.9,2.06-3.88,4.21-5.77,6.3a1.29,1.29,0,0,1-1,.42h0a1.27,1.27,0,0,1-1-.42c-1.09-1.2-2.19-2.39-3.28-3.56a1.29,1.29,0,0,1,1.88-1.76c.78.84,1.57,1.68,2.35,2.54,1.6-1.76,3.25-3.55,4.83-5.27l1.35-1.46a1.29,1.29,0,0,1,1.9,1.74Z"
                                                            transform="translate(-4 -2.1)" fill="#fff"/>
                                                    </svg>
                                                </div>
                                                <div class="nk-block-content">
                                                    <div class="nk-block-content-head">
                                                        <h4>Complete Your KYC</h4>
                                                        <span class="sub-text sub-text-sm text-soft"></span>
                                                    </div>
                                                    <p>Looks like your have not verified your indentity yet. Please
                                                        verify yourself to get full access to Escrow.</p>
                                                    <ul class="list list-sm list-checked">
                                                        <li>Fiat Currency Wallet <span>(USD, EUR, GBP, Ringgit)</span>
                                                        </li>
                                                        <li>Digital Crypto Wallet <span>(ETH, BTC, USDT, XRP)</span>
                                                        </li>
                                                        <li>Receive and send payment with EscrowBear</li>
                                                    </ul>
                                                    <a href="{{route('register-kyc-verify')}}"
                                                       class="btn btn-lg btn-primary">Get
                                                        Started</a>
                                                </div>
                                            </div>
                                        @elseif(!Auth::user()->google2fa_enable)
                                            <div class="nk-block-content">
                                                <div class="nk-block-content-head">
                                                    <h4>Secure Your account</h4>
                                                    <span class="sub-text sub-text-sm text-soft"></span>
                                                </div>
                                                <p>
                                                    Secure your account with 2FA security. When it is activated you will
                                                    need to
                                                    enter not only your password, but also a special code using app. You
                                                    can
                                                    receive this code by in mobile app.
                                                </p>
                                                <div class="nk-block-actions text-right">
                                                    <a href="{{url('g2fa')}}" class="btn btn-primary">Enable Google 2FA</a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset_url('assets/js/croppie.js')}}"></script>
    <script src="{{asset_url('assets/js/welcome.js')}}"></script>
@endsection
