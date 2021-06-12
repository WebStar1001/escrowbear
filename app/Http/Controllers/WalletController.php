<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \CoinMarketCapApi;

class WalletController extends Controller
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

        return view('wallet/index');
    }

    public function coinWallet(Request $request)
    {

        $coin_symbol = $request->coin;

        return view('wallet/coin', ['coin_symbol' => $coin_symbol]);
    }
}
