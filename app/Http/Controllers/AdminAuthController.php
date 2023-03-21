<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.admin.index');
    }
    public function manage()
    {
        return view('admin.dashboard.admin.manage');
    }
}
