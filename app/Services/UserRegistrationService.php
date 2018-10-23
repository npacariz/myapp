<?php

namespace App\Services;
use App\User;

class UserRegistrationService {
    public function registerUser($request) {
<<<<<<< HEAD
        $newUser = User::create($request->all());
=======
        $newUser = User::create($request->only('firstName', 'lastName', 'country', 'company', 'password'));
>>>>>>> fixingCode
        return $newUser;
    }
}
