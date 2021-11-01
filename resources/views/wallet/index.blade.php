@extends('layouts.app')

@section('content')
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-sub"><span>Account Wallet</span></div><!-- .nk-block-head-sub -->
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">Wallet / Assets</h2>
                        <div class="nk-block-des">
                            <p>Here is the list of your assets / wallets!</p>
                        </div>
                    </div>
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="nk-block-head-sm">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title title">Crypto Accounts</h5>
                    </div>
                </div>
                <div class="row g-gs">
                    @if(count($wallets) > 0)
                        @foreach($wallets as $wallet)
                            <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                <div class="card card-bordered">
                                    <div class="nk-wgw">
                                        <div class="nk-wgw-inner">
                                            <a class="nk-wgw-name" href="{{url('wallet/BTC')}}">
                                                <div class="nk-wgw-icon">
                                                    <em class="icon ni ni-sign-btc"></em>
                                                </div>
                                                <h5 class="nk-wgw-title title">Bitcoin Wallet</h5>
                                            </a>
                                            <div class="nk-wgw-balance">
                                                <div class="amount">4.434953<span
                                                        class="currency currency-btc">BTC</span></div>
                                                <div class="amount-sm">28,247.63<span
                                                        class="currency currency-usd">USD</span></div>
                                            </div>
                                        </div>
                                        <div class="nk-wgw-actions">
                                            <ul>
                                                <li><a href="#"><em class="icon ni ni-arrow-up-right"></em>
                                                        <span>Send</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-arrow-down-left"></em><span>Receive</span></a>
                                                </li>
                                                <li><a href="#"><em class="icon ni ni-arrow-to-right"></em><span>Withdraw</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-wgw-more dropdown">
                                            <a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em
                                                    class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                <ul class="link-list-plain sm">
                                                    <li><a href="#">Details</a></li>
                                                    <li><a href="#">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                    <li><a href="#">Make Default</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        @endforeach
                    @endif
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-bordered dashed h-100">
                            <div class="nk-wgw-add">
                                <div class="nk-wgw-inner">
                                    <a href="#">
                                        <div class="add-icon">
                                            <em class="icon ni ni-plus"></em>
                                        </div>
                                        <h6 class="title">Add New Wallet</h6>
                                    </a>
                                    <span class="sub-text">You can add your more wallet in your account to manage separetly.</span>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="masterCodeModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Password for Wallet</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate is-alter">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Password</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Open Wallets</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text"></span>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset_url('assets/js/wallet.js?ver=2.2.0')}}"></script>
@endsection