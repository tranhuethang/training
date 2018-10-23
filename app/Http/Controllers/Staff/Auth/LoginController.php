<?php

namespace App\Http\Controllers\Staff\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;

class LoginController extends Controller
{
    public function getLoginStaff()
    {
        return view('staff.auth.login');
    }

    public function postLoginStaff(LoginRequest $request)
    {
        $loginstaff = [
            'email' => $request -> email,
            'password' => $request -> password
        ];
        if (Auth::guard('staffs')->attempt($loginstaff)) {

            return redirect('staff/index');
        } else {

            return redirect()->back()->with('status', 'Email or Password not correctly');
        }

    }

    public function getLogoutStaff()
    {
        Auth::logout();

        return redirect()->route('getLoginAdmin');
    }
}
