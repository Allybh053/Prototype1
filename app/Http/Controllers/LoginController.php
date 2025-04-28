<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // important
use Illuminate\Support\Facades\Auth; // important

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Default redirect if nothing custom.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Where to redirect users after login based on role
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->role == 'admin') {
            return redirect('/admin/home');
        } else {
            return redirect('/home');
        }
    }
}
