<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.footer.index');
    }
    public function footer_manage()
    {
        return view('admin.dashboard.footer.manage');
    }
}
