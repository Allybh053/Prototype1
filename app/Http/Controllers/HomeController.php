<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userHome()
    {
        return view('home'); // for normal users
    }

    public function adminHome()
    {
        return view('admin.home'); // for admins
    }
}
