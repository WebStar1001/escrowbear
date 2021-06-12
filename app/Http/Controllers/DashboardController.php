<?php

namespace App\Http\Controllers;

use App\Override\Api\CoinpaymentsApi;
use Illuminate\Http\Request;
use \CoinMarketCapApi;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coin_data = CoinMarketCapApi::all_cryptos(['start' => '1', 'limit' => '10', 'convert' => 'USD']);
        $retAry = array();
        foreach ($coin_data['data'] as $data) {
            if ($data['symbol'] == 'BTC') {
                $retAry['bitcoin'] = $data;
            } elseif ($data['symbol'] == 'ETH') {
                $retAry['ethereum'] = $data;
            } elseif ($data['symbol'] == 'USDT') {
                $retAry['tether'] = $data;
            } elseif ($data['symbol'] == 'XRP') {
                $retAry['xrp'] = $data;
            }
        }
        return view('dashboard/index')
            ->with('bitcoinData', $retAry['bitcoin'])
            ->with('etherData', $retAry['ethereum'])
            ->with('usdtData', $retAry['tether'])
            ->with('xrpData', $retAry['xrp']);
    }

    public function stepone()
    {
        return view('dashboard/registerStepOne');
    }

    public function steptwo()
    {
        return view('dashboard/registerStepTwo');
    }
}
