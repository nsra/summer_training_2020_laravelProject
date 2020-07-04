<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;


use App\Providers\RouteServiceProvider;


class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/admin'; //Redirect after authenticate

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout'); //Notice this middleware

    }

    public function showLoginForm() //Go web.php then you will find this route
    {
        die();

        return view('admins.auth.login');
    }

    public function login(Request $request) //Go web.php then you will find this route
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);

    }

    public function logout(Request $request)
    {
        $this->guard('admin')->logout();

        $request->session()->invalidate();

        return redirect('/login');
    }

    protected function guard() // And now finally this is our custom guard name
    {
        return Auth::guard('admin');
    }
}
