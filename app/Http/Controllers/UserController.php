<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;




class UserController extends Controller
{
    public function index()
{  $roles = Role::all();
        return view('adduser',compact('roles'));
}

public function edit($user){
    $roles = Role::all();
    $user=User::findOrFail($user);


    return view('edituser',compact('user','roles'));
}

public function userupdate( Request $request ,User $user){
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required',
    ]);

    $user->update($validated);
    $user->syncRoles($request->roll);
    toast('User Account Successfully Updated.','info')->autoClose(3000);

    return redirect(route('usermanagement'));
}

public function createaccount(Request $request)
{

    $validated = $request->validate([
        'name' => 'required|max:255|unique:users',
        'email' => 'required|unique:users',
        'password'=>'required|min:5',
        'conf_password'=>'required|same:password',

    ]);

    $data = new User();
    $data->name = $request->name;
    $data ->email =$request->email;
    $data ->password = Hash::make($request->password);
    $data->save();

    $data->syncRoles($request->roll);


    toast('User Account Successfully Created ','success')->autoClose(3000);

    return redirect(route('usermanagement'));



}

Public function showuserdata(User $user, Role $role ){
    $roles = Role::all();
    $datas = User::all();
    return view('usermanagement',compact('datas','roles'));
}

Public function userdetail( $id ){
    $data= User::findOrFail($id);

    return view('userdetail',compact('data'));
}
public function destroy(Request $request ,$user){
    User::destroy($user);
    toast('User Account Deleted. ','error')->autoClose(3000);
    return redirect('usermanagement');
}



}
