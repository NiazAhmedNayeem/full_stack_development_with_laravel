<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('admin.dashboard.home.index');
    }
    public function home_manage()
    {
        return view('admin.dashboard.home.manage');
    }
}
