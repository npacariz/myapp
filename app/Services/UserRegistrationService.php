<?php

namespace App\Services;
use App\User;

class UserRegistrationService {
    public function registerUser($request) {
        $newUser = User::create($request->only('firstName', 'lastName', 'email', 'country', 'company', 'password'));
        return $newUser;
    }
}
