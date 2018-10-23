<?php

namespace App\Services;
use App\User;

class UserRegistrationService {
    public function registerUser($request) {
        $newUser = User::create($request->only('firstName', 'lastName', 'country', 'company', 'password'));
        return $newUser;
    }
}
