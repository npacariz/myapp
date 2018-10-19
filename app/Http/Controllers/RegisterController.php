<?php

namespace App\Http\Controllers;
use App\Http\Requests\registerValidation;
use Illuminate\Http\Request;
use App\User;
use App\Services\CountriesService;
use App\Services\UserRegistrationService;
class RegisterController extends Controller
{
  
   public function create(CountriesService $countries) {

       return view('Auth.register')->with('countries', $countries->countries);
   }

   public function store(registerValidation $request, UserRegistrationService $registerUser) {

       $user = $registerUser->registerUser($request);
       auth()->login($user);
      
       return redirect('/home');
   }
}

