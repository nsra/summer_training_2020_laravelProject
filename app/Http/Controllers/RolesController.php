<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
Use App\Admin;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RolesController extends Controller
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
        $roles = Role::where([]);
        $roles = $roles->paginate(24);
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
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
        $roles= Role::create([
            'name' => $request['name'],
        ]);

        if ($roles->save() === TRUE)
            return redirect()->back()->with('success', trans('roles.success.stored'));
        return redirect()->back()->with('error', trans('roles.error.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('roles.show', [
            'role' => Role::find($id),
        ]);
    }

    public function view_permissions($id)
    {
        $role= Role::find($id);
//        $permissions= $role->permissions();
        $permissions=Permission::all();
        return view('roles.permissions', compact('role', 'permissions'));

    }

    public function update_permissions(Request $request){
        try{
            $role=Role::find($request->role_id);
            $role->syncPermissions($request->permissions);
            return redirect()->back()->with('success', trans('permission.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('permission.error.updated'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role= Role::find($id);
        return view('roles.edit', compact('role'));

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
            $roles = Role::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());
            $roles->name=$request->name;
            $roles->update();

            return redirect()->back()->with('success', trans('role.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('role.error.updated'));
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
            $role = Role::findOrFail($id);
            $role->delete();

            return response()->json(['status' => 200, 'message' => trans('role.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('role.error.deleted')]);
        }
    }
    private function rules()
    {
        return [
            'name' => 'required|string|max:255',

        ];
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
            'name.required' => trans('role.validations.name_required'),
            'name.max' => trans('role.validations.name_max'),


        ];
    }


}
