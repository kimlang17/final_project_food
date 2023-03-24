<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function loginForm(){

        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $remember = $request->has('remember') ? true : false;
        // config/session.php set 'expire_on_close' => true,
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remember)) {
            return redirect('/dashboard')->withSuccess('You have Successfully loggedin');
        }
        return redirect("/login")->withErrors('You have entered invalid credentials!');
    }
    public function dashboard()
    {
        if(Auth::check()){
            $user = Auth::user();
            return view('admin.dashboard')->with('user',$user);
        }
        return redirect("/login")->withErrors('You do not have access!');
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('/login')->withSuccess('You have successfully loged out!');
    }
}
