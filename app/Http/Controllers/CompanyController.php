<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
       
        $company = Company::first();
        return view('company.index', compact('company'));
    }

  
 
    public function update(Request $request, $id)
    {
        try{
            $company = Company::findOrFail($id);

            $request->validate($this->rules($id), $this->messages());
            // die();

            $company_data = [];
            $company_data['en'] = [
                'name' => $request->en_name,
                'address' => $request->en_address,
                'description' => $request->en_description,
                'footer' => $request->en_footer,
            ];
            $company_data['ar'] = [
                'name' => $request->ar_name,
                'address' => $request->ar_address,
                'description' => $request->ar_description,
                'footer' => $request->ar_footer,            
            ];

            if($request->file('company_image')){
                $company->image= parent::uploadImage($request->file('company_image'));
            }
            $company->email=$request->email;
            $company->whatsapp=$request->whatsapp;
            $company->update($company_data);
            return redirect()->back()->with('success', trans('company.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('company.error.updated'));
        }
    }



    private function rules($id = null)
    {
        $rules = [
            'en_name' => 'required|max:50',
            'en_address' => 'string|required',
            'en_description' => 'string|required',
            'en_footer' => 'string|required',
            'company_image' => 'image',
            'ar_name' => 'required|max:50',
            'ar_address' => 'string|required',
            'ar_description' => 'string|required',
            'ar_footer' => 'string|required',
            'email' => 'email|required',
            'whatsapp' => 'required',
        ];
        if (!$id) {
            $rules['company_image'] = 'required|image';
        }
        return $rules;
    }

    /**
     *
     * validation's messages
     *
     * @return array
     */
    private function messages()
    {
        return [
            'en_name.required' => trans('company.validations.name_required'),
            'ar_name.max' => trans('company.validations.name_max'),
            'en_address.required' => trans('company.validations.rview_required'),
            'ar_address.required' => trans('company.validations.rview_required'),
            'company_image.required' => trans('company.validations.image_required'),

        ];
    }
}
