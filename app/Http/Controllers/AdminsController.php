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

    public function __construct()
    {
//        $this->middleware('auth:admin');
    }


    public function index(Request $request)
    {
//        $admin= Admin::find(2);
//        $admin->assignRole('reader');
//        $admin->givePermissionTo('read articles');
//        $admin->givePermissionTo('read parts');
//        $admin->givePermissionTo('read projects');
//        $admin->givePermissionTo('read client reviews');
//        $admin->givePermissionTo('read working teams');
//        $admin->givePermissionTo('read company features');
//        $admin->givePermissionTo('read admins');
//        $admin->givePermissionTo('read permissions');


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
        return view('admins.create', ['url' => 'admin']);
    }


    public function view_permissions($id)
    {
        $admin = Admin::find($id);
        $roles = Role::all();
        $permissions = Permission::all();
        $admin_roles = $admin->getRoleNames();
        $admin_permissions = $admin->getPermissionNames();
//dd($admin_permissions);
        return view('admins.permissions',compact('permissions', 'roles', 'admin', 'admin_permissions'));
    }

    public function update_admin_permissions(Request $request){
        try{
            $role=Role::find($request->role_id);
            $role->syncPermissions($request->permissions);
            return redirect()->back()->with('success', trans('permission.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('permission.error.updated'));
        }
    }

    public function get_permissions_by_role(Request $request){
            $permissions=Role::find($request->id)->permissions()->pluck('id');
//            return $permissions;
            return redirect()->back();
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