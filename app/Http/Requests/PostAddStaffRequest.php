<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAddStaffRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email|unique:users,email',
            'name' => 'required|min:3',
            'password' => 'required|min:3|max:32',
        ];
    }

    public function message()
    {
        return [
            'email.required' => 'Please enter your email',
            'email.email' => 'Your email is not format',
            'email.unique' => 'Email already exists',
            'name.required' => 'Please enter your name',
            'name.min' => 'Username must atleast 3 character',
            'password.required' => 'Please enter password',
            'password.min' => 'Password must atleast 3 character',
        ];
    }
}
