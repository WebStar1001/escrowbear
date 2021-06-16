<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('profile_path')) {

    function profile_path($path)
    {
        return asset('storage/profile/' . $path);
    }

    function is_verified()
    {
        if (Auth::check()) {
            if (Auth::user()->isUser()) {
                if (Auth::user()->google2fa_enable && Auth::user()->profile_path && Auth::user()->kycVerification) {
                    return true;
                }
            }else{
                return true;
            }

        }
        return false;
    }

}
