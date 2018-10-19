<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{ 
    public function create() {
        return view('Auth.login');
    }

    public function store(Request $request) {
        $credentials = $request->only(['email', 'password']);
        if(!auth()->attempt($credentials)) {
            return redirect()->back()->withErrors([
                'message' => 'Bad credentials. Please try again!',
            ]);
        }
        return redirect('/home');
    }
 
    public function destroy() {
        Auth()->logout();
        return redirect('/login');
    }

 
}
