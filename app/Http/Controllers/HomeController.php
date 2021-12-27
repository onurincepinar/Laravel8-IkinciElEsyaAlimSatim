<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        return view('HomeScreen.index');
    }
    public function aboutus(){
        return view('HomeScreen.about');

    }
    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request){
        if ($request->isMethod('post')){
            $credentials=$request->only('email','password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The provided credentials do not match our records',
            ]);
        }
        else{
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin/login');
    }
    /*
    public function logout( Request $request )
    {
        if(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }

        $this->guard()->logout();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
*/
    /*public function login(){
        return view('admin.login');
    }*/


}
