<?php

namespace App\Http\Controllers\API;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $successStatus = 200;
    public function __construct()
    {
        $this->middleware('auth:api');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function userDashboard()
    // {
    //     return view('user');
    // }

    public function edit_user_profile(){
        $user= Auth::user();
        return view('users.profile', compact('user'));
    }

    public function update_user_profile(Request $request){
        try{
            $user_id= Auth::guard('api')->user()->id;
            $user = User::findOrFail($user_id);
            $request->validate($this->rules($user_id), $this->messages());
            $user->fill($request->all());
            $user->update();
            return response()->json(['success' => trans('lang.updateprofile_done')], $this->successStatus); 
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['error'=> trans('user.error.updated')], 401); 
        }
    }

    // public function change_user_password(){
    //     $user= Auth::user();
    //     return view('users.changepassword', compact('user'));
    // }

    // public function update_user_password(Request $request){
    //     $request->validate([
    //         'old_password' => ['required', new MatchOldPassword],
    //         'password' => ['required'],
    //         'password_confirmation' => ['same:password'],
    //     ]);
    //     $user=Auth::user()->update(['password'=> Hash::make($request->password)]);
    //     return redirect()->back()->with('success', trans('lang.changepassword_done'));
    // }

    private function rules($id){
        $rules = [
            'name' => ['string'],
            'email' => 'unique:users,email,'.$id
        ];

        return $rules;
    }


    private function messages(){
        return [
            'name.required' => trans('user.validations.name_required'),
            'name.max' => trans('user.validations.name_max'),
            'email.required' => trans('user.validations.email_required'),

        ];
    }


    public function update_user_password(Request $request)
    {
        $request->validate([
            'old_password' => ['required', new MatchOldPassword],
            'password' => ['required'],
            'password_confirmation' => ['same:password'],
        ]);
        //$user=Auth::user()->update(['password'=> Hash::make($request->password)]);
        if(Auth::user()->update(['password'=> Hash::make($request->password)]))
            return response()->json(['success' => trans('lang.changepassword_done')], $this->successStatus); 
        else
            response()->json(['error'=> 'error'], 401); 
    }



}
