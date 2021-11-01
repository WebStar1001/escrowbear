@extends('layouts.app')

@section('content')
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Create Escrow</h3>
                        <div class="nk-block-des text-soft">
                            <p>Welcome to Create Escrow.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-block hideSection" id="firstStepBlock">
                <div class="row g-gs">
                    <div class="col-md-6 col-sm-12 border-gray border-right">
                        <h3>What is being sold?</h3>
                        <p style="font-size: 20px;">
                            Give this transaction a name for reference, describing what is being transacted, providing
                            as much detail as necessary. Both fields are required to move forward.
                        </p>
                        <p style="font-size: 20px;">
                            Additionally, you can add a URL for reference, if the item/service is listed on a website.
                            You can also choose to add shipping details for items being shipped.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 border-gray">
                        <div class="form-group">
                            <label class="form-label" for="name">Give the Escrow Name</label>
                            <input type="text" class="form-control form-control-lg" id="escrowName"
                                   placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="cf-default-textarea">Describe what is being sold</label>
                            <div class="form-control-wrap">
                                    <textarea class="form-control form-control-sm" id="escrowDescription"
                                              placeholder=""></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row g-gs pt-3 justify-content-end">
                    <div class="col-2">
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" id="nextBtn" disabled>Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-block hideSection" id="secondStepBlock">
                <div class="row g-gs">
                    <div class="col-md-6 col-sm-12 border-gray border-right">
                        <h3>How Much is the Item Being Sold For?</h3>
                        <p style="font-size: 20px;">
                            Please choose the desired currency for this escrow transaction. Guarantee the sum noted is
                            as required.
                        </p>
                        <p style="font-size: 20px;">
                            Connect your desired wallet for this transaction, this is the wallet you will be funding the
                            purchase from, or receiving funds to.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 border-gray">
                        <div class="form-group">
                            <label class="form-label" for="name">Choose the currency being used in
                                escrow</label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-info col-4" id="currencyBtn"
                                    data-toggle="modal" data-target="#currencyModal"><em
                                    class="icon ni ni-money"></em><span>Choose</span>
                            </button>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="escrowAmount">Enter the amount of the transaction.</label>
                            <input type="text" class="form-control form-control-lg" id="escrowAmount"
                                   placeholder="0.000000">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-primary col-3" id="connectWalletBtn">Wallet Connect</button>
                        </div>

                    </div>
                </div>
                <div class="row g-gs pt-3 justify-content-between">
                    <div class="col-2">
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" id="prevBtn">Previous</button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" id="nextBtn" disabled>Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-block " id="thirdStepBlock">
                <div class="row g-gs">
                    <div class="col-md-6 col-sm-12 border-gray border-right">
                        <h3>What is being sold?</h3>
                        <p style="font-size: 20px;">
                            Give this transaction a name for reference, describing what is being transacted, providing
                            as much detail as necessary. Both fields are required to move forward.
                        </p>
                        <p style="font-size: 20px;">
                            Additionally, you can add a URL for reference, if the item/service is listed on a website.
                            You can also choose to add shipping details for items being shipped.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 border-gray">
                        <div class="form-group">
                            <label class="form-label" for="sellerOption">Choose your Role - Buyer or Seller</label><br>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="sellerOption" name="customRadio" class="custom-control-input"
                                       checked>
                                <label class="custom-control-label" for="sellerOption">Seller</label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input type="radio" id="buyerOption" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="buyerOption">Buyer</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="marketPublicOption">Do you want to list this escrow publicly
                                in the marketplace?
                            </label><br>
                            <div class="custom-control-lg custom-switch">
{{--                                <label class="custom-control-label" for="customSwitch1">Yes</label>--}}
                                <input type="checkbox" class="custom-control-input" id="marketPublicOption">
                                <label class="custom-control-label" for="marketPublicOption">Yes</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="escrowEmail">Add Buyer's email address
                                (Required)</label>
                            <input type="text" class="form-control form-control-lg" id="escrowEmail"
                                   placeholder="">
                        </div>

                    </div>
                </div>
                <div class="row g-gs pt-3 justify-content-between">
                    <div class="col-2">
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" id="prevBtn">Previous</button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" id="nextBtn" disabled>Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="currencyModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Choose Currency</h5>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="col-sm-6">
                            <div class="card bg-light" datatype="currencySelector" id="BTC">
                                <div class="nk-wgw sm">
                                    <div class="nk-wgw-inner">
                                        <div class="nk-wgw-name">
                                            <div class="nk-wgw-icon bg-btc-dim">
                                                <em class="icon ni ni-sign-btc"></em>
                                            </div>
                                            <h5 class="nk-wgw-title title">Bitcoin</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-6">
                            <div class="card bg-light" datatype="currencySelector" id="ETH">
                                <div class="nk-wgw sm">
                                    <div class="nk-wgw-inner">
                                        <div class="nk-wgw-name">
                                            <div class="nk-wgw-icon bg-eth-dim">
                                                <em class="icon ni ni-sign-eth"></em>
                                            </div>
                                            <h5 class="nk-wgw-title title">Ethereum</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-6">
                            <div class="card bg-light" datatype="currencySelector" id="USDT">
                                <div class="nk-wgw sm">
                                    <div class="nk-wgw-inner">
                                        <div class="nk-wgw-name">
                                            <div class="nk-wgw-icon bg-usdt-dim">
                                                <em class="icon ni ni-sign-usdt"></em>
                                            </div>
                                            <h5 class="nk-wgw-title title">Tehter</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-6">
                            <div class="card bg-light" datatype="currencySelector" id="XRP">
                                <div class="nk-wgw sm">
                                    <div class="nk-wgw-inner">
                                        <div class="nk-wgw-name">
                                            <div class="nk-wgw-icon bg-xrp-dim">
                                                <em class="icon ni ni-sign-xrp"></em>
                                            </div>
                                            <h5 class="nk-wgw-title title">XRP</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
    <script src="https://unpkg.com/moralis/dist/moralis.js"></script>
    <script
        src="https://github.com/WalletConnect/walletconnect-monorepo/releases/download/1.6.2/web3-provider.min.js"></script>
    <script src="{{asset_url('assets/js/escrow.js?ver=2.2.0')}}"></script>
@endsection
