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
class PermissionsController extends Controller
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
        $permissions = Permission::where([]);

        $permissions = $permissions->paginate(24);
        return view('permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('permissions.create', ['roles'=> $roles]);
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
        $permission= Permission::create([
            'name' => $request['name'],
        ]);

        if ($permission->save() === TRUE){
            $permission->assignRole($request->role);
            return redirect()->back()->with('success', trans('permission.success.stored'));

        }
        return redirect()->back()->with('error', trans('permission.error.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('permissions.show', [
            'permission' => Permission::find($id),
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
        $permission= Permission::find($id);
        return view('permissions.edit', compact('permission'));

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
            $permission = Permission::findOrFail($id);
            $request->validate($this->rules($id), $this->messages());
            $permission->name=$request->name;
            $permission->update();

            return redirect()->back()->with('success', trans('permission.success.updated'));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return redirect()->back()->with('error', trans('permission.error.updated'));
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
            $permission = Permission::findOrFail($id);
            $permission->delete();

            return response()->json(['status' => 200, 'message' => trans('permission.success.deleted')]);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json(['status' => 200, 'message' => trans('permission.error.deleted')]);
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
            'name.required' => trans('permission.validations.name_required'),
            'name.max' => trans('permission.validations.name_max'),


        ];
    }


}
