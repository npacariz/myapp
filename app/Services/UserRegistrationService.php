<?php

namespace App\Services;
use App\User;

    class UserRegistrationService 
    {
       public function registerUser($request)
       {
            $user = User::create([
                'firstName' => request('firstName'),
                'lastName' => request('lastName'),
                'email' => request('email'),
                'company' => request('company'),
                'country' => request('country'),
                'password' => bcrypt(request('password')),
            ]);

            return $user;

       }
    }



?>