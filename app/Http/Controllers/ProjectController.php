<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.project.index');
    }
    public function project_manage()
    {
        return view('admin.dashboard.project.manage');
    }
}
