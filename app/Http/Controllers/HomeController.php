<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function getInvited(Request $request)
    {
        $emailcontent = [];
        Mail::send('emails.getinvited', $emailcontent, function ($message) {
            $message->to('eric9178vadim@gmail.com', 'Learning Laravel Support')
                ->subject('Contact using Our Contact Form');
        });
    }
}
