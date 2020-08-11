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

    public function edit_user_profile(){
        try{
            $user = User::find(Auth::guard('api')->user()->id);
            return response()->json(['success' => $user], $this->successStatus); 
        } catch (ModelNotFoundException $modelNotFoundException) {
        return response()->json(['error'=> 'user not found'], 401); 
        }
    }

    public function update_user_profile(Request $request){
    //  dd($request->all());
        try{
            $user_id= Auth::guard('api')->user()->id;
            $user = User::findOrFail($user_id);
            $request->validate($this->rules($user_id), $this->messages());
            $user->fill($request->all());
            
            if($request->file('user_image')){
                $user->image= parent::uploadImage($request->file('user_image'));
            }
            $user->update();
            return response()->json(['success' => trans('lang.updateprofile_done')], $this->successStatus); 
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['error'=> trans('user.error.updated')], 401); 
        }
    }

   

    private function rules($id){
        $rules = [
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users,email'. ($id != null ? ',' . $id : ''),
            'user_image' => 'nullable',
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
        $validator = Validator::make($request->all(), [ 
            'old_password' => ['required', new MatchOldPassword],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        if(Auth::user()->update(['password'=> Hash::make($request->password)]))
            return response()->json(['success' => trans('lang.changepassword_done')], $this->successStatus); 
        else
            response()->json(['error'=> 'error'], 401); 
    }

}
