<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.resume.index');
    }
    public function resume_manage()
    {
        return view('admin.dashboard.resume.manage');
    }
}
