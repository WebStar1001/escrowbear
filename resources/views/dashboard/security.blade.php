@extends('layouts.app')

@section('content')
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title">Security Settings</h5>
                        <div class="nk-block-des">
                            <p>These settings are helps you keep your account secure.</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="card card-bordered">
                    <div class="card-inner-group">
                        <div class="card-inner">
                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                <div class="nk-block-text">
                                    <h6>Master Escrow Code</h6>
                                    <p>You can set your pin code, we will ask you on your withdraw and transfer
                                        funds.</p>
                                </div>
                                <div class="nk-block-actions">
                                    <div class="custom-control custom-switch mr-n2">
                                        <input type="checkbox" class="custom-control-input" id="security-pin"
                                               @if($user->master_escrow_code != null) checked @endif>
                                        <label class="custom-control-label" for="security-pin"></label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <!-- .card-inner -->
                        <div class="card-inner">
                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                <div class="nk-block-text">
                                    <h6>Google 2FA Authentication
                                        @if($user->google2fa_enable)
                                            <span class="badge badge-success">Enabled</span>
                                        @else
                                            <span class="badge badge-gray">Disabled</span>
                                        @endif
                                    </h6>
                                    <p>Secure your account with 2FA security. When it is activated you will need to
                                        enter not only your password, but also a special code using app. You can receive
                                        this code by in mobile app. </p>
                                </div>
                                <div class="nk-block-actions">
                                    @if($user->google2fa_enable)
                                        <a href="{{url('g2fa')}}" class="btn btn-gray">Disable</a>
                                    @else
                                        <a href="{{url('g2fa')}}" class="btn btn-primary">Enable</a>
                                    @endif
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                <div class="nk-block-text">
                                    <h6>Authy 2FA Authentication <span class="badge badge-success">Enabled</span></h6>
                                    <p>Secure your account with 2FA security. When it is activated you will need to
                                        enter not only your password, but also a special code using app. You can receive
                                        this code by in mobile app. </p>
                                </div>
                                <div class="nk-block-actions">
                                    <a href="#" class="btn btn-primary">Disable</a>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                <div class="nk-block-text">
                                    <h6>Change Password</h6>
                                    <p>Set a unique password to protect your account.</p>
                                </div>
                                <div class="nk-block-actions flex-shrink-sm-0">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                        <li class="order-md-last">
                                            <a href="#" data-toggle="modal" data-target="#password-edit"
                                               class="btn btn-primary">Change Password</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card-inner-group -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="master-escrow-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Set Master Escrow Code</h5>
                    <form action="{{route('set-master-code')}}" method="post" id="masterCodeForm">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Master Escrow Code</label>
                                    <input type="number" class="form-control form-control-lg" id="master_code"
                                           name="master_code" placeholder="Enter Master Code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">Code Confirm</label>
                                    <input type="number" class="form-control form-control-lg" id="code_confirmation"
                                           name="master_code_confirmation" placeholder="Enter Code Confirmation">
                                </div>
                            </div>
                            <div class="nk-error col-12">
                                <span id="errorSpan" style="display: none;"></span>
                            </div>
                            <div class="col-12">
                                <ul class="align-center gx-4 gy-2 justify-content-end">
                                    <li>
                                        <button type="button" id="setCodeBtn" class="btn btn-lg btn-primary">Set Code
                                        </button>
                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="btn btn-lg btn-gray">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <p>
                                    Please be in private place.
                                    MasterEscrow Code which is required to be kept
                                    By Seller to Verify Your consent to whitepapers, contracts, transfers or send coins
                                    later
                                </p>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="password-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Change Password</h5>
                    <form action="{{route('change-password')}}" method="post" id="passwordForm">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Password</label>
                                    <input type="password" class="form-control form-control-lg" id="password"
                                           name="password" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">Password Confirm</label>
                                    <input type="password" class="form-control form-control-lg" id="password_confirmation"
                                           name="password_confirmation" placeholder="Enter Password Confirmation">
                                </div>
                            </div>
                            <div class="nk-error col-12">
                                <span id="passErrorSpan" style="display: none;"></span>
                            </div>
                            <div class="col-12">
                                <ul class="align-center gx-4 gy-2 justify-content-end">
                                    <li>
                                        <button type="button" id="setPasswordBtn" class="btn btn-lg btn-primary">Set
                                            Password
                                        </button>
                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="btn btn-lg btn-gray">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/profile-security.js')}}"></script>
@endsection
