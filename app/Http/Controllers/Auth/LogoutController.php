<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {       Auth::guard('web')->logout();
            header("cache-Control:no-store,no-cache, must-revalidate");
            header("cache-Control:post-check=0,pre-check=0",false);
            header("Pragma:no-cache");
            header("Expires: Sat,26 Jul 1997 05:00:00: GMT");
            $request->session()->flush();
            $request->session()->regenerate();
            return view('welcome');
    }
}
