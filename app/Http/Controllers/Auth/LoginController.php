<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Notifications\TwoFactorCode;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function showLoginStep1()
    {
        return view('auth/loginstep1');
    }

    function showLoginStep2(Request $request)
    {
        return view('auth/loginstep2', ['email' => $request->email]);
    }

    function usercheck(Request $request)
    {

        $isUser = User::where('email', $request->email)->first();

        if ($isUser) {
            return redirect()->route('loginstep2', ['email' => $request->email]);
        } else {
            return redirect()->back()->withErrors(['Unregistered Email']);
        }

    }

    function authenticated(Request $request, $user)
    {
//        $user->update([
//            'last_login_at' => Carbon::now()->toDateTimeString(),
//            'last_login_ip' => $request->getClientIp()
//        ]);
//        if ($user->isAdmin()) {
//            return redirect(route('admin_dashboard'));
//        } // to user dashboard
//        else if ($user->isUser()) {
//            return redirect(route('dashboard'));
//        }
//
//        abort(404);
        $user->generateTwoFactorCode();
        $user->notify(new TwoFactorCode());
    }
}
