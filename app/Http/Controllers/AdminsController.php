<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Admin;
Use App\Team;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public $permission;
//
//    public function __construct(Permission $permission)
//    {
//        $this->permission = $permission;
//    }

    public function index(Request $request)
    {
        $admins = Admin::where([]);
        if ($request->has('name'))
            $admins = $admins->where('name', 'like', '%' . $request->input('name') . '%');
        if ($request->has('email'))
            $admins = $admins->where('email', 'like', '%' . $request->input('email') . '%');
        $admins = $admins->paginate(5);
        return view('admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    public function view_permissions()
    {

        $roles = Role::all();
        $permissions = Permission::all();

        return view('admins.permissions',compact('permissions', 'roles'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules(), $this->messages());

        $request['image'] = parent::uploadImage($request->file('admin_image'));

        $admin= Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'image' => $request['image'],
        ]);

//        $admin->givePermissions($request->permissions);
        if ($admin->save() === TRUE)
            return redirect()->back()->with('success', trans('admin.success.stored'));
        return redirect()->back()->with('error', trans('admin.error.stored'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admins.show', [
            'admin' => Admin::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin= Admin::find($id);
        return view('admins.edit', compact('admin'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $admin = Admin::findOrFail($id);

            $request->validate($this->rules($id), $this->messages());

            $admin->fill($request->all());

            if($request->file('admin_image')){
                $admin->image= parent::uploadImage($request->file('admin_image'));
            }
            $admin->update();
            return redirect()->back()->with('success', trans('admin.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('admin.error.updated'));
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $admin = Admin::findOrFail($id);
            $admin->delete();

            return response()->json(['status' => 200, 'message' => trans('admin.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('admin.error.deleted')]);
        }
    }
    private function rules($id = null)
    {
        $rules = [
            'name' => 'required|max:100',
            'email' => 'required|email',
//            'permissions' => ['required', 'array'],
            'admin_image' => 'image',
            ];
        if (!$id) {
            $rules['admin_image'] = 'required|image';
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
            'name.required' => trans('admin.validations.name_required'),
            'name.max' => trans('admin.validations.name_max'),
            'email.required' => trans('admin.validations.email_required'),
            'admin_image.required' => trans('admins.validations.image_required'),

        ];
    }


}
