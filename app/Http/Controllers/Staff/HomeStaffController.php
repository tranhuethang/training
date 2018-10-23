<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;

class HomeStaffController extends Controller
{
    public function indexStaff()
    {
        return view('layouts.staff.home');
    }
}
