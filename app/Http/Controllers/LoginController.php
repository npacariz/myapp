<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
        $this->middleware('auth')->only('destroy');
       
    }
 
    public function create() {
        return view('Auth.login');
    }

    public function store(Request $request) {
        $credentials = request()->only(['email', 'password']);
        if(!auth()->attempt($credentials)) {
            return redirect()->back();
        }
 
        return redirect('/home');
    }
 
    public function destroy() {

        Auth()->logout();
        return redirect('/login');
    }

 
}
