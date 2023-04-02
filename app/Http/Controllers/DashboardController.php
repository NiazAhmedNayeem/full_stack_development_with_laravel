<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }


    public function services()
    {
        return view('admin.dashboard.services.index');
    }
    public function services_manage()
    {
        return view('admin.dashboard.services.manage');
    }

    public function skill()
    {
        return view('admin.dashboard.skill.index');
    }
    public function skill_manage()
    {
        return view('admin.dashboard.skill.manage');
    }







}
