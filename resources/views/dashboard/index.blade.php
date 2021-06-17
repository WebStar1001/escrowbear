@extends('layouts.app')

@section('content')
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="row gy-gs">
                    <div class="col-lg-12">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <div class="row gy-gs">
                                    <div class="col-md-7 col-12">
                                        <ul class="coin-tabs row">
                                            <li class="col-sm-3 col-md-3 col-4 coin-list" data-symbol="BTC"><em
                                                    class="bg-btc-dim icon-coins icon ni ni-sign-btc"></em></li>
                                            <li class="col-sm-3 col-md-3 col-6 coin-list" data-symbol="ETH"><em
                                                    class="bg-eth-dim icon-coins icon ni ni-sign-eth ml-1"></em></li>
                                            <li class="col-sm-3 col-md-3 col-4 coin-list mt-3 mt-md-0 mt-lg-0 mt-sm-0"
                                                data-symbol="USDT"><em
                                                    class="bg-usdt-dim icon-coins icon ni ni-sign-usdt ml-1"></em></li>
                                            <li class="col-sm-3 col-md-3 col-6 coin-list mt-3 mt-md-0 mt-lg-0 mt-sm-0"
                                                data-symbol="XRP">
                                                <em
                                                    class="bg-xrp-dim icon-coins icon ni ni-sign-xrp ml-1"></em></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 col-12">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <img src="{{asset_url('assets/img/btc-animation.jpg')}}"
                                                     style="width: 100%;height:90px;"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-gs">
                                    <div class="col-sm-12">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="container" id="BTCStatus">
                                                    <div class="row justify-content-lg-end justify-content-md-start">
                                                        <div class="col-lg-2 col-md-3 col-5">
                                                            <em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em>
                                                            <span class="text-info pl-2">Bitcoin</span></div>
                                                        <div class="col-lg-2 col-md-4 col-6">
                                                            <p style="text-decoration: underline;">Price</p>
                                                            <p class="text-info">
                                                                ${{number_format($bitcoinData['quote']['USD']['price'], 2)}}</p>
                                                            <input type="hidden" value="{{$bitcoinData['quote']['USD']['price']}}" id="coinPrice">
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-5 mt-sm-3 mt-3 mt-md-0">
                                                            <p style="text-decoration: underline;">24h volume</p>
                                                            <p class="text-info">
                                                                ${{number_format($bitcoinData['quote']['USD']['volume_24h'], 2)}}</p>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-3 mt-md-3 col-5 mt-sm-3 mt-3 mt-lg-0">
                                                            <p
                                                                style="text-decoration: underline;">Market Cap</p>
                                                            <p class="text-info">
                                                                ${{number_format($bitcoinData['quote']['USD']['market_cap'], 2)}}</p>
                                                        </div>
                                                        <div
                                                            class="col-lg-2 col-md-4 mt-md-3 col-5 mt-sm-3 mt-3 mt-lg-0">
                                                            <p
                                                                style="text-decoration: underline;">
                                                                EscrowBear©Market</p>
                                                            <p class="text-info">$3,585,663.25</p></div>
                                                        <div
                                                            class="col-lg-2 col-md-4 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <p
                                                                style="text-decoration: underline;">Circulating
                                                                Supply</p>
                                                            <p class="text-info">
                                                                ${{number_format($bitcoinData['circulating_supply'], 2)}}</p>
                                                            <div class="progress">
                                                                <div class="progress-bar"
                                                                     data-progress="{{$bitcoinData['circulating_supply']/$bitcoinData['max_supply']*100}}"></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-3 col-5 mt-lg-3 mt-md-3 mt-sm-5 mt-3"
                                                            style="max-height: 100px;">
                                                            <span style="text-decoration: underline;">Chart</span>
                                                            <div style="height:100px;">
                                                                <canvas id="BTCPriceBalance"></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 mt-lg-4 col-md-4 mt-md-4 col-sm-6 mt-sm-5 border col-6 mt-4"
                                                            style="max-height: 100px;">
                                                            <div class="input-group input-group-lg pt-1">
                                                                <div class="d-flex align-items-center">
                                                                    <em class="bg-btc-dim icon-calculator icon ni ni-sign-btc">
                                                                    </em>
                                                                    <span class="pl-1">
                                                                         Bitcoin
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-right border-0 calculator-input" id="coin_calculator">
                                                            </div>
                                                            <div class="input-group input-group-lg">
                                                                <div class="">
                                                                    <span class="border-0">
                                                                        <img
                                                                            src="{{asset_url('assets/img/currency/icons8-us-dollar-48.png')}}">
                                                                        USD
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-right border-0 calculator-input" id="usd_calculator">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-2 col-md-2 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <div style="height:100px;">
                                                                <canvas id="BTCStatusChart"></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-2  col-md-2 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <div style="height:100px;">
                                                                <canvas id="BTCEscrowChart"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container d-none" id="ETHStatus">
                                                    <div class="row justify-content-lg-end justify-content-md-start">
                                                        <div class="col-lg-2 col-md-3 col-5">
                                                            <em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em>
                                                            <span class="text-success pl-2">Ethereum</span></div>
                                                        <div class="col-lg-2 col-md-4 col-6">
                                                            <p style="text-decoration: underline;">Price</p>
                                                            <p class="text-success">
                                                                ${{number_format($etherData['quote']['USD']['price'], 2)}}</p>
                                                            <input type="hidden" value="{{$etherData['quote']['USD']['price']}}" id="coinPrice">
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-5 mt-sm-3 mt-3 mt-md-0">
                                                            <p style="text-decoration: underline;">24h volume</p>
                                                            <p class="text-success">
                                                                ${{number_format($etherData['quote']['USD']['volume_24h'], 2)}}</p>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-3 mt-md-3 col-5 mt-sm-3 mt-3 mt-lg-0">
                                                            <p
                                                                style="text-decoration: underline;">Market Cap</p>
                                                            <p class="text-success">
                                                                ${{number_format($etherData['quote']['USD']['market_cap'], 2)}}</p>
                                                        </div>
                                                        {{--                                                </div>--}}
                                                        {{--                                                <div class="row mt-3">--}}
                                                        <div
                                                            class="col-lg-2 col-md-4 mt-md-3 col-5 mt-sm-3 mt-3 mt-lg-0">
                                                            <p
                                                                style="text-decoration: underline;">
                                                                EscrowBear©Market</p>
                                                            <p class="text-success">$3,585,663.25</p></div>
                                                        <div
                                                            class="col-lg-2 col-md-4 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <p
                                                                style="text-decoration: underline;">Circulating
                                                                Supply</p>
                                                            <p class="text-success">
                                                                ${{number_format($etherData['circulating_supply'], 2)}}</p>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-4 col-4 mt-lg-3 mt-md-3 mt-sm-3 mt-3"
                                                            style="max-height: 100px;">
                                                            <span style="text-decoration: underline;">Chart</span>
                                                            <div style="height:100px;">
                                                                <canvas id="ETHPriceBalance"></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 mt-lg-4 col-md-4 mt-md-4 col-sm-6 mt-sm-5 border col-6 mt-4"
                                                            style="max-height: 100px;">
                                                            <div class="input-group input-group-lg pt-1">
                                                                <div class="d-flex align-items-center">
                                                                    <em class="bg-eth-dim icon-calculator icon ni ni-sign-eth">
                                                                    </em>
                                                                    <span class="pl-1">
                                                                         Ethereum
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-right border-0 calculator-input" id="coin_calculator">
                                                            </div>
                                                            <div class="input-group input-group-lg">
                                                                <div class="">
                                                                    <span class="border-0">
                                                                        <img
                                                                            src="{{asset_url('assets/img/currency/icons8-us-dollar-48.png')}}">
                                                                        USD
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-right border-0 calculator-input" id="usd_calculator">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-2 col-md-3 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <div style="height:100px;">
                                                                <canvas id="ETHStatusChart"></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-2  col-md-3 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <div style="height:100px;">
                                                                <canvas id="ETHEscrowChart"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container d-none" id="USDTStatus">
                                                    <div class="row justify-content-lg-end justify-content-md-start">
                                                        <div class="col-lg-2 col-md-3 col-5">
                                                            <em class="bg-usdt-dim icon-circle icon ni ni-sign-usdt"></em>
                                                            <span class="text-success pl-2">Tether</span></div>
                                                        <div class="col-lg-2 col-md-4 col-6">
                                                            <p style="text-decoration: underline;">Price</p>
                                                            <p class="text-success">
                                                                ${{number_format($usdtData['quote']['USD']['price'], 2)}}</p>
                                                            <input type="hidden" value="{{$usdtData['quote']['USD']['price']}}" id="coinPrice">
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-5 mt-sm-3 mt-3 mt-md-0">
                                                            <p style="text-decoration: underline;">24h volume</p>
                                                            <p class="text-success">
                                                                ${{number_format($usdtData['quote']['USD']['volume_24h'], 2)}}</p>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-3 mt-md-3 col-5 mt-sm-3 mt-3 mt-lg-0">
                                                            <p
                                                                style="text-decoration: underline;">Market Cap</p>
                                                            <p class="text-success">
                                                                ${{number_format($usdtData['quote']['USD']['market_cap'], 2)}}</p>
                                                        </div>
                                                        {{--                                                </div>--}}
                                                        {{--                                                <div class="row mt-3">--}}
                                                        <div
                                                            class="col-lg-2 col-md-4 mt-md-3 col-5 mt-sm-3 mt-3 mt-lg-0">
                                                            <p
                                                                style="text-decoration: underline;">
                                                                EscrowBear©Market</p>
                                                            <p class="text-success">$3,585,663.25</p></div>
                                                        <div
                                                            class="col-lg-2 col-md-4 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <p
                                                                style="text-decoration: underline;">Circulating
                                                                Supply</p>
                                                            <p class="text-success">
                                                                ${{number_format($usdtData['circulating_supply'], 2)}}</p>
                                                            {{--                                                            <div class="progress">--}}
                                                            {{--                                                                <div class="progress-bar"--}}
                                                            {{--                                                                     data-progress="{{$etherData['circulating_supply']/$etherData['max_supply']*100}}"></div>--}}
                                                            {{--                                                            </div>--}}
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-4 col-4 mt-lg-3 mt-md-3 mt-sm-3 mt-3"
                                                            style="max-height: 100px;">
                                                            <span style="text-decoration: underline;">Chart</span>
                                                            <div style="height:100px;">
                                                                <canvas id="USDTPriceBalance"></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 mt-lg-4 col-md-4 mt-md-4 col-sm-6 mt-sm-5 border col-6 mt-4"
                                                            style="max-height: 100px;">
                                                            <div class="input-group input-group-lg pt-1">
                                                                <div class="d-flex align-items-center">
                                                                    <em class="bg-usdt-dim icon-calculator icon ni ni-sign-usdt">
                                                                    </em>
                                                                    <span class="pl-1">
                                                                         USDT
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-right border-0 calculator-input" id="coin_calculator">
                                                            </div>
                                                            <div class="input-group input-group-lg">
                                                                <div class="">
                                                                    <span class="border-0">
                                                                        <img
                                                                            src="{{asset_url('assets/img/currency/icons8-us-dollar-48.png')}}">
                                                                        USD
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-right border-0 calculator-input" id="usd_calculator">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-2 col-md-3 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <div style="height:100px;">
                                                                <canvas id="USDTStatusChart"></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-2  col-md-3 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <div style="height:100px;">
                                                                <canvas id="USDTEscrowChart"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container d-none" id="XRPStatus">
                                                    <div class="row justify-content-lg-end justify-content-md-start">
                                                        <div class="col-lg-2 col-md-3 col-5">
                                                            <em class="bg-usdt-dim icon-circle icon ni ni-sign-usdt"></em>
                                                            <span class="text-success pl-2">XRP</span></div>
                                                        <div class="col-lg-2 col-md-4 col-6">
                                                            <p style="text-decoration: underline;">Price</p>
                                                            <p class="text-success">
                                                                ${{number_format($xrpData['quote']['USD']['price'], 2)}}</p>
                                                            <input type="hidden" value="{{$xrpData['quote']['USD']['price']}}" id="coinPrice">
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-5 mt-sm-3 mt-3 mt-md-0">
                                                            <p style="text-decoration: underline;">24h volume</p>
                                                            <p class="text-success">
                                                                ${{number_format($xrpData['quote']['USD']['volume_24h'], 2)}}</p>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-3 mt-md-3 col-5 mt-sm-3 mt-3 mt-lg-0">
                                                            <p
                                                                style="text-decoration: underline;">Market Cap</p>
                                                            <p class="text-success">
                                                                ${{number_format($xrpData['quote']['USD']['market_cap'], 2)}}</p>
                                                        </div>
                                                        {{--                                                </div>--}}
                                                        {{--                                                <div class="row mt-3">--}}
                                                        <div
                                                            class="col-lg-2 col-md-4 mt-md-3 col-5 mt-sm-3 mt-3 mt-lg-0">
                                                            <p
                                                                style="text-decoration: underline;">
                                                                EscrowBear©Market</p>
                                                            <p class="text-success">$3,585,663.25</p></div>
                                                        <div
                                                            class="col-lg-2 col-md-4 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <p
                                                                style="text-decoration: underline;">Circulating
                                                                Supply</p>
                                                            <p class="text-success">
                                                                ${{number_format($xrpData['circulating_supply'], 2)}}</p>
                                                            <div class="progress">
                                                                <div class="progress-bar"
                                                                     data-progress="{{$xrpData['circulating_supply']/$xrpData['max_supply']*100}}"></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-4 col-4 mt-lg-3 mt-md-3 mt-sm-3 mt-3"
                                                            style="max-height: 100px;">
                                                            <span style="text-decoration: underline;">Chart</span>
                                                            <div style="height:100px;">
                                                                <canvas id="XRPPriceBalance"></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 mt-lg-4 col-md-4 mt-md-4 col-sm-6 mt-sm-5 border col-6 mt-4"
                                                            style="max-height: 100px;">
                                                            <div class="input-group input-group-lg pt-1">
                                                                <div class="d-flex align-items-center">
                                                                    <em class="bg-xrp-dim icon-calculator icon ni ni-sign-xrp">
                                                                    </em>
                                                                    <span class="pl-1">
                                                                         XRP
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-right border-0 calculator-input" id="coin_calculator">
                                                            </div>
                                                            <div class="input-group input-group-lg">
                                                                <div class="">
                                                                    <span class="border-0">
                                                                        <img
                                                                            src="{{asset_url('assets/img/currency/icons8-us-dollar-48.png')}}">
                                                                        USD
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-right border-0 calculator-input" id="usd_calculator">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-2 col-md-3 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <div style="height:100px;">
                                                                <canvas id="XRPStatusChart"></canvas>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-2  col-md-3 col-5 mt-lg-3 mt-md-3 mt-sm-3 mt-3">
                                                            <div style="height:100px;">
                                                                <canvas id="XRPEscrowChart"></canvas>
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
                    </div>
                </div><!-- .card -->
                <div class="row gy-gs">
                    <div class="col-lg-12">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <h5 class="card-title">My Escrow</h5>
                                <div class="row g-4">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="nk-order-ovwg-data buy">
                                            <div class="amount">New Escrows 1</div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-4">
                                        <div class="nk-order-ovwg-data sell">
                                            <div class="amount">Active Escrows 2</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <div class="nk-order-ovwg-data text-secondary border-secondary">
                                            <div class="amount">Completed Escrows 3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset_url('assets/js/dashboard.js?ver=2.2.0')}}"></script>
@endsection
