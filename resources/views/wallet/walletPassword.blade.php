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
                    <form action="#" class="form-validate is-alter">
                        <div class="form-group">
                            <label class="form-label" for="walletPassword">Password</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="walletPassword" name="walletPassword" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-wrap btn-primary col-12">Open Wallets</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset_url('assets/js/wallet.js?ver=2.2.0')}}"></script>
@endsection
