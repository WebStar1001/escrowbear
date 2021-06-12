<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class SecurityController extends Controller
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
        $user = Auth::user();
        return view('dashboard/security', ['user' => $user]);
    }

    public function setMasterCode(Request $request){
        $user = Auth::user();
        $user->master_escrow_code = Hash::make($request->master_code);
        $user->save();
        return redirect()->back()->with('success',"Successfully Set Master Escorw Code");
    }

    public function changePassword(Request $request){
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success',"Successfully Changed Password");
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
