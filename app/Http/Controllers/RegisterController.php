<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    
    
    public $listOfCountries = ['Serbia', 'USA', 'UK', 'Austria'];

    public function create() {
        $countries =  $this->listOfCountries;
        return view('Auth.register',  compact('countries'));
    }

    public function store() {
        

        $user = User::create([
            'firstName' => request('firstName'),
            'lastName' => request('lastName'),
            'email' => request('email'),
            'company' => request('company'),
            'country' => request('country'),
            'password' => bcrypt(request('password')),
        ]);
        auth()->login($user);
        
        return redirect('/home');
    }
}