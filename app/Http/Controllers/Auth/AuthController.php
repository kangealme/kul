<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function get_login()
    {
        return view('auth.login');
    }

    public function login()
    {
        echo "tes login";
    }

    public function get_register()
    {
        return view('auth.register');
    }
}
