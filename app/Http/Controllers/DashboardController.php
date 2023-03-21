<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function home()
    {
        return view('admin.dashboard.home.index');
    }
    public function home_manage()
    {
        return view('admin.dashboard.home.manage');
    }

    public function about()
    {
        return view('admin.dashboard.about.index');
    }
    public function about_manage()
    {
        return view('admin.dashboard.about.manage');
    }

    public function resume()
    {
        return view('admin.dashboard.resume.index');
    }
    public function resume_manage()
    {
        return view('admin.dashboard.resume.manage');
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

    public function project()
    {
        return view('admin.dashboard.project.index');
    }
    public function project_manage()
    {
        return view('admin.dashboard.project.manage');
    }

    public function contact()
    {
        return view('admin.dashboard.contact.index');
    }
    public function contact_manage()
    {
        return view('admin.dashboard.contact.manage');
    }

    public function footer()
    {
        return view('admin.dashboard.footer.index');
    }
    public function footer_manage()
    {
        return view('admin.dashboard.footer.manage');
    }

}
