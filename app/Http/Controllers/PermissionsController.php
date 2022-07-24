<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\Rules\Unique;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
 public function index(Permission $permission){
   $permissions =Permission::all();
    return view('permissions.index',compact('permissions'));
 }
 public function create(Permission $permission){
   $permissions = Permission::all();
    return view('permissions.create',compact('permissions'));
 }

 public function store(Request $request){
    $this->validate($request, [
        'name' => 'required|unique:permissions,name|min:3',
        'display_name' => 'required|unique:permissions,name|min:3',
        
    ]);

     Permission::create(
        ['name' => $request->input('name'),
        'display_name'=>$request->input('display_name'),
]);
   
 
toast('Permissions created successfully','success')->autoClose(3000);
    return redirect()->route('permissions.index');
}

public function destroy( Request $request, $role)
{   
   Permission::destroy($role);
   toast('Permissions Deleted','error')->autoClose(3000);
    return To_route('permissions.index');
}

    public function edit(Permission $permission,Role $role){
       $roles = Role::all();
      
    return view('permissions.edit',compact('permission','roles'));
   }

   public function update(Request $request ,Permission $permission){
         $validated = $request->validate
         (['name'=>'required',
         'display_name'=>'required',
      ]);
      $permission->update(
            ['name' => $request->input('name'),
            'display_name'=>$request->input('display_name'),
        ]);

        toast('Permission Value Updated','info')->autoClose(3000);
         return to_route('permissions.index');
   }

   public function permissionassignrole(Permission $permission ,Role $role)
   {  
      $roles = Role::all();
     $permissions = Permission::all();
      // dd($permission);
      return view('permissions.assignRole',compact('permissions','roles'));
   }

   public function assignRole(Request $request, Permission $permission){
      if($permission->hasRole($request->check)){
         toast('Role Exists','info')->autoClose(3000);
        return back();
      }

      $permission->assignRole($request->check);
      toast('Role Assigned.','success')->autoClose(3000);
      return back();
       
    }
    
    public function removeRole(Permission $permission , Role $role ){
      if($permission->hasRole($role))
      {
          $permission->removeRole($role);
          toast('Role Removed.','warning')->autoClose(3000);
      return back()->with('delete','Role Removed');
    }          
    toast(' Role  does not Exists.','warning')->autoClose(3000);
    return back();
    
    
    }

}
