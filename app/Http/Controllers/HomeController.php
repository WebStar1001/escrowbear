<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getInvited(Request $request){
        print_r($request->all());exit;
    }
}
