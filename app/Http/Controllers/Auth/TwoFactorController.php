<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TwoFactorController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.twoFactor')
            ->with('email', $request->email);
    }

    public function store(Request $request)
    {
        $request->validate([
            'two_factor_code' => 'required',
        ]);

        $user = auth()->user();

        if ($request->input('two_factor_code') == $user->two_factor_code) {

            $user->update([
                'last_login_at' => Carbon::now()->toDateTimeString(),
                'last_login_ip' => $request->getClientIp()
            ]);
            $user->resetTwoFactorCode();

            return redirect()->route('dashboard');
        }

        return redirect()->route('verify.index')
            ->withErrors(['two_factor_code' =>
                'The two factor code you have entered does not match']);
    }

    public function resend()
    {
        $user = auth()->user();
        $user->generateTwoFactorCode();
        $user->notify(new TwoFactorCode());

        return redirect()->back()->withMessage('The two factor code has been sent again');
    }
}
