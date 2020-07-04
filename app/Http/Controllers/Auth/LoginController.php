<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function attemptLogin(Request $request)
    {
        $adminAttempt = Auth::guard('admin')->attempt(
            $this->credentials($request), $request->has('remember')
        );

        if($adminAttempt)
            return redirect()->back()->with('success', trans('admin.success.admin_login'));
        if(!$adminAttempt){

            return Auth::guard('web')->attempt(
                $this->credentials($request), $request->has('remember')
            );
        }
        return $adminAttempt;
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');

    }


//    public function adminLogin(Request $request)
//    {
//        $this->validate($request, [
//            'email'   => 'required|email',
//            'password' => 'required|min:8'
//        ]);
//
//        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
//
//            return redirect()->back()->with('success', trans('admin.success.admin_login'));
//        }
//        return back()->withInput($request->only('email', 'remember'));
//    }
}
