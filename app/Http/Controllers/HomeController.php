<?php

namespace App\Http\Controllers;
use App\PermissionTranslation;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $role = Role::create(['name' => 'reader']);
//        $permission = PermissionTranslation::create(['name' => 'read articles', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'create articles', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'edit articles', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'delete articles', 'guard_name' => 'admin' ]);

//        PermissionTranslation::create([
//            'en' => [ 'locale' =>'en', 'name' => 'read parts', 'permission_id' => '5' ],
//            'ar' => [ 'locale' =>'ar', 'name' => 'قراءة الأقسام', 'permission_id' => '5' ],
//        ]);
//        PermissionTranslation::save();
//        $permission = Permission::create(['name' => 'create parts', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'edit parts', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'delete parts', 'guard_name' => 'admin' ]);
//
//        $permission = Permission::create(['name' => 'read parts', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'create parts', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'edit parts', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'delete parts', 'guard_name' => 'admin' ]);
//
//        $permission = Permission::create(['name' => 'read projects' , 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'create projects', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'edit projects', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'delete projects', 'guard_name' => 'admin' ]);
//
//        $permission = Permission::create(['name' => 'read client reviews', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'create client reviews', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'edit client reviews', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'delete client reviews', 'guard_name' => 'admin' ]);
//
//        $permission = Permission::create(['name' => 'read working team', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'create working team', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'edit working team', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'delete working team', 'guard_name' => 'admin' ]);
//
//        $permission = Permission::create(['name' => 'read company features', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'create company features', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'edit company features', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'delete company features', 'guard_name' => 'admin' ]);
//
//        $permission = Permission::create(['name' => 'read admins', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'create admins', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'edit admins', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'delete admins', 'guard_name' => 'admin' ]);
//
//        $permission = Permission::create(['name' => 'read permissions', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'create permissions', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'edit permissions', 'guard_name' => 'admin' ]);
//        $permission = Permission::create(['name' => 'delete permissions', 'guard_name' => 'admin' ]);
//

//        $role=Role::find(2);
//        $permissin= Permission::find(1);
//        dd($permissin);
//        $role->givePermissionTo($permissin);
//        dd($role);
//        $permissin->removeRole($role);
//        $role->revokePermissionTo($permissin);
//        $user = \App\User::find(1);
//        $roles = $user->getRoleNames();
        return view('home');
    }


    public function admin_index()
    {
        return view('base_layout.admin_dashboard');
    }
}
