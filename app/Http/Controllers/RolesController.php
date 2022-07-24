<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RolesController extends Controller
{
   public function index(Role $role){
    $roles = Role::all();
    return view('roles.index',compact('roles'));
   }

   public function create(Permission $permission){
    $permissions =Permission::all();
    return view('roles.create',compact('permissions'));
   }

   public function store(Request $request ,Role $role ){
   
    $this->validate($request, [
        'name' => 'required|unique:roles,name',
        'permission' => 'required',
        'display_name' => 'required|unique:roles,name|min:3',
    ]);

    $role = Role::create([
        'display_name' =>  $request->input('display_name'),
        'name' => $request->input('name'),
    
]);
    $role->syncPermissions($request->input('permission'));

       

    toast('Role created successfully','success')->autoClose(3000);
    return redirect()->route('roles.index');
}

public function destroy( Request $request, $role)
{   
   Role::destroy($role);
   toast('Role Deleted','error')->autoClose(3000);
    return To_route('roles.index');
}

public function edit(Role $role){
  
    $permissions = Permission::all();
   $rolePermissions = $role->permissions()->pluck('id')->toArray();
   
    return view('roles.edit',compact('role','permissions','rolePermissions'));
   }

   public function update(Request $request ,Role $role){
   
    $this->validate($request, [
        'name' => 'required',
        'permission' => 'required',
        'display_name' => 'required',
    ]);
   
    $role->update(
        ['name' => $request->input('name'),
        'display_name'=>$request->input('display_name'),
    ]);

   
$role->syncPermissions($request->input('permission'));
toast('Role Value Updated','info')->autoClose(3000);
    return to_route('roles.index');
   }

      
  


}
