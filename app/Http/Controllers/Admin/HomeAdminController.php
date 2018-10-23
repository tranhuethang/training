<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeAdminController extends Controller
{
    public function indexAdmin()
    {
        return view('layouts.admin.home');
    }
}
