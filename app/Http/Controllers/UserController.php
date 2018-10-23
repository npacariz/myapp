<?php

namespace App\Http\Controllers;

class UserController extends Controller {
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show() {
        return response()->json(auth()->user());
    }
    /**
     * Post for registering new user
     */
    public function store(registerValidation $request, UserRegistrationService $registerUser) {

        $user = $registerUser->registerUser($request);

        return $this->login($user->email, $user->password);
    }
    /**
     * List of contutries for user register form
     */
    public function create(CountriesService $countries) {
        return $countries->countries;
    }
}
