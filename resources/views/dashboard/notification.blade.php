@extends('layouts.app')

@section('content')
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><span>Notification Setting</span></div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title">Security Alerts</h5>
                        <div class="nk-block-des">
                            <p>You will get only those email notification what you want.</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block-content">
                    <div class="gy-3">
                        <div class="g-item">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked id="unusual-activity">
                                <label class="custom-control-label" for="unusual-activity">Email me whenever encounter unusual activity</label>
                            </div>
                        </div>
                        <div class="g-item">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="new-browser">
                                <label class="custom-control-label" for="new-browser">Email me if new browser is used to sign in</label>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block-contnet -->
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-head-content">
                        <h6 class="nk-block-title">News</h6>
                        <div class="nk-block-des">
                            <p>You will get only those email notification what you want.</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block-content">
                    <div class="gy-3">
                        <div class="g-item">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked id="latest-sale">
                                <label class="custom-control-label" for="latest-sale">Notify me by email about sales and latest news</label>
                            </div>
                        </div>
                        <div class="g-item">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="feature-update">
                                <label class="custom-control-label" for="feature-update">Email me about new features and updates</label>
                            </div>
                        </div>
                        <div class="g-item">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked id="account-tips">
                                <label class="custom-control-label" for="account-tips">Email me about tips on using account</label>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block-content -->
            </div><!-- .nk-block -->
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset_url('assets/js/profile-security.js')}}"></script>
@endsection
