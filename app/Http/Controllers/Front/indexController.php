<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function __construct()
    {

    }
    public function indexShow()
    {
        return view('front.index');
    }
}
