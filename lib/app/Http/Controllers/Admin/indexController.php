<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function __construct()
    {
    }
    public function showLogin()
    {
        return view('front.login');
    }
    public function checkLogin()
    {

    }
    public function showRegister()
    {

    }
    public function register()
    {

    }
}
