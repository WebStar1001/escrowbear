<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;

class Google2FAController extends Controller
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
     * Show 2FA Setting form
     */
    public function show2faForm(Request $request){
        $user = Auth::user();
        $google2fa_url = "";
        $secret_key = "";

        if($user->google2fa_secret != ''){
            $google2fa = (new \PragmaRX\Google2FAQRCode\Google2FA());
            $google2fa_url = $google2fa->getQRCodeInline(
                'EscrowBear',
                $user->email,
                $user->google2fa_secret
            );
            $secret_key = $user->google2fa_secret;
        }

        $data = array(
            'user' => $user,
            'secret' => $secret_key,
            'google2fa_url' => $google2fa_url
        );

        return view('dashboard/profile/2fa_settings')->with('data', $data);
    }

    /**
     * Generate 2FA secret key
     */
    public function generate2faSecret(Request $request){
        $user = Auth::user();
        // Initialise the 2FA class
        $google2fa = app('pragmarx.google2fa');
//        print_r($user);exit;

        // Add the secret key to the registration data
        $user->google2fa_enable = 0;
        $user->google2fa_secret = $google2fa->generateSecretKey();
        $user->save();

        return redirect('/g2fa')->with('success',"Secret key is generated.");
    }

    /**
     * Enable 2FA
     */
    public function enable2fa(Request $request){
        $user = Auth::user();
        $google2fa = app('pragmarx.google2fa');

        $secret = $request->input('secret');
        $valid = $google2fa->verifyKey($user->google2fa_secret, $secret);
        $valid = true;
        if($valid){
            $user->google2fa_enable = 1;
            $user->save();
            return redirect('profile/security')->with('success',"2FA is enabled successfully.");
        }else{
            return redirect('g2fa')->with('error',"Invalid verification Code, Please try again.");
        }
    }

    /**
     * Disable 2FA
     */
    public function disable2fa(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your password does not matches with your account password. Please try again.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
        ]);
        $user = Auth::user();
        $user->google2fa_enable = 0;
        $user->save();
        return redirect('profile/security')->with('success',"2FA is now disabled.");
    }
}
