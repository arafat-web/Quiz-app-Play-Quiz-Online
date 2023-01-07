<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function logoutUser(){

        Session::flush();
        auth()->guard('web')->logout();
        return redirect('login');
    }
}
