<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;

class UserManageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        exit('here');
//        $user = Auth::user();
//        $wallets = Wallet::where('user_id', $user->id)
//            ->orderby('balance')->get();
        return view('admin/usermanage/index');
//            ->with('wallets', $wallets);
    }
}
