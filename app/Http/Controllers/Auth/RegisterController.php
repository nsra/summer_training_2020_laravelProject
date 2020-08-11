<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
        $this->middleware('guest:web');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_image' => ['required', 'image'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
//    protected function create(array $data)
//    {
//        $user= User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
//        if($user->save()){
//            $user->assignRole('user');
//            $role_permissions=Role::findByName('user')->permissions;
//            $user->syncPermissions($role_permissions);
//            return $user;
//        }
//        return redirect()->back()->with('error', trans('user.error.stored'));
//
//    }

    public function showUserRegisterForm()
    {
        return view('auth.user_register', ['url' => 'user']);
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse
     */
    protected function createUser(Request $request)
    {
       
        $this->validator($request->all())->validate();
        if($request->file('user_image')){
            $request['image'] = parent::uploadImage($request->file('user_image'));
        }
        $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $request['image'],
        ]);
        if ($user->save() === TRUE)
            return redirect()->route('multiguard_login');
        else return redirect()->back()->with('error', trans('user.error.stored'));

        
    }
}
