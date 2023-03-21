<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.user.index');
    }
    public function manage()
    {
        return view('admin.dashboard.user.manage');
    }
}
