<?php

namespace App\Http\Controllers;
use App\Admin;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminDashboard()
    {
    
        return view('base_layout.admin_dashboard');
    }

    public function edit_admin_profile(){
        $user= Auth::user();
        return view('admin_profile.profile', compact('user'));
    }

    public function update_admin_profile(Request $request){
        try{
            $user_id= Auth::user()->id;
            $admin = Admin::findOrFail($user_id);
            $request->validate($this->rules($user_id), $this->messages());
            $admin->fill($request->all());
            if($request->file('admin_image')){
                $admin->image= parent::uploadImage($request->file('admin_image'));
            }
            $admin->update();
            return redirect()->back()->with('success', trans('lang.updateprofile_done'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('admin.error.updated'));
        }
    }

    public function change_admin_password(){
        $user= Auth::user();
        return view('admin_profile.changepassword', compact('user'));
    }

    public function update_admin_password(Request $request){
        $request->validate([
            'old_password' => ['required', new MatchOldPassword],
            'password' => ['required'],
            'password_confirmation' => ['same:password'],
        ]);
        $user=Auth::user()->update(['password'=> Hash::make($request->password)]);
        return redirect()->back()->with('success', trans('lang.changepassword_done'));
    }

    private function rules($id)
    {
        $rules = [
            'admin_image' => ['image'],
            'name' => ['string'],
            'email' => 'unique:admins,email,'.$id
        ];

        return $rules;
    }


    private function messages()
    {
        return [
            'name.required' => trans('admin.validations.name_required'),
            'name.max' => trans('admin.validations.name_max'),
            'email.required' => trans('admin.validations.email_required'),
            'admin_image.required' => trans('admins.validations.image_required'),

        ];
    }

}
