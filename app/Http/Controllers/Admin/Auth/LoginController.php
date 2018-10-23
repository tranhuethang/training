<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;

class LoginController extends Controller
{
    public function getLoginAdmin()
    {
        return view('admin.auth.login');
    }

    public function postLoginAdmin(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('admins')->attempt($login)) {

            return redirect('admin/index');
        } else {

            return redirect()->back()->with('status', 'Email or Password not correctly');
        }
    }

    public function getLogoutAdmin()
    {
        Auth::guard('admins')->logout();

        return redirect()->route('getLoginStaff');
    }
}
