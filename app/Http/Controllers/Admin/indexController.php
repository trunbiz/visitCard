<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; //use thư viện auth

class indexController extends Controller
{
    //
    public function __construct()
    {
    }
    public function indexShow()
    {
        return view('admin.index');
    }
    public function showLogin()
    {
        return view('front.login');
    }
    public function checkLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        //kiểm tra trường remember có được chọn hay không

        if (Auth::attempt($arr)) {

            return view('admin.index');
        } else {

           return view('front.login');
        }
    }
    public function showRegister()
    {

    }
    public function register()
    {

    }
}
