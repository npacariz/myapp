<?php

namespace App\Http\Requests;

use App\Services\CountriesService;
use Illuminate\Foundation\Http\FormRequest;

class registerValidation extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(CountriesService $countires) {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'company' => 'required',
            'password' => 'required|confirmed',
            'country' => 'required|in:' . implode(',', $countires->countries),
        ];
    }
}
