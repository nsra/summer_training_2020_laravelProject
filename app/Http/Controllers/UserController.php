<?php

namespace App\Http\Controllers;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userDashboard()
    {
        return view('user');
    }

    public function edit_user_profile(){
        $user= Auth::user();
        return view('users.profile', compact('user'));
    }

    public function update_user_profile(Request $request){
        try{
            $user_id= Auth::user()->id;
            $user = User::findOrFail($user_id);
            $request->validate($this->rules($user_id), $this->messages());
            $user->fill($request->all());

            if($request->file('user_image')){
                $user->image= parent::uploadImage($request->file('user_image'));
            }
            $user->update();
            return redirect()->back()->with('success', trans('lang.updateprofile_done'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('user.error.updated'));
        }
    }

    public function change_user_password(){
        $user= Auth::user();
        return view('users.changepassword', compact('user'));
    }

    public function update_user_password(Request $request){
        $request->validate([
            'old_password' => ['required', new MatchOldPassword],
            'password' => ['required'],
            'password_confirmation' => ['same:password'],
        ]);
        $user=Auth::user()->update(['password'=> Hash::make($request->password)]);
        return redirect()->back()->with('success', trans('lang.changepassword_done'));
    }

    private function rules($id){
        $rules = [
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users,email,'.$id,
            'user_image' => 'image',
            ];
        if (!$id) {
            $rules['user_image'] = 'required|image';
        }
        return $rules;
    }


    private function messages(){
        return [
            'name.required' => trans('user.validations.name_required'),
            'name.max' => trans('user.validations.name_max'),
            'email.required' => trans('user.validations.email_required'),

        ];
    }

}
