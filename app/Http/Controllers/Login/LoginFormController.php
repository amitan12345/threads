<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;

class LoginFormController extends Controller
{
    public function index()
    {
        return view('login');
    }
}
