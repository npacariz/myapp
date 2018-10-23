<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Requests\registerValidation;
use App\Services\CountriesService;
use App\Services\UserRegistrationService;

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
    public function store(registerValidation $request, UserRegistrationService $registerUser, AuthController $loginUser) {

        $user = $registerUser->registerUser($request);

        return $loginUser->login($user->email, $user->password);
    }
    /**
     * List of contutries for user register form
     */
    public function create(CountriesService $countries) {
        return $countries->countries;
    }
}
