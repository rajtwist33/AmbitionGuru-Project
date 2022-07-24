<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
 
class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect()->route('usermanagement');
        }
        return view('login');
    }
    
    public function authenticate(Request $request)
    {
    
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
          

            $request->session()->regenerate();

            toast('Welcome you are Logged In.','success')->autoClose(3000);
            return redirect()->intended('usermanagement');

        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
