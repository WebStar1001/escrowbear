<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InviteNotification;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function getInvited(Request $request)
    {
        $emailcontent = ['invite_code'=>Str::random()];

        Mail::to($request->email_address)->send(new InviteNotification($emailcontent));

        return redirect()->back()->with('success',"Successfully Sent Invitation Code");
    }
}
