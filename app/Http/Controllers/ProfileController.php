<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function editprofile(){
        $user= Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function updateprofile(){
        die();
    }

    public function changepassword(){
        $user= Auth::user();
        return view('profile.changepassword', compact('user'));
    }

//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'old_password' => ['required', 'string', 'min:8'],
//            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
//        ]);
//    }
    public function updatepassword(Request $request){
        $request->validate([

            'old_password' => ['required', new MatchOldPassword],

            'password' => ['required'],

            'password_confirmation' => ['same:password'],

        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);

        return redirect()->back()->with('success', trans('lang.changepassword_done'));
    }
}
