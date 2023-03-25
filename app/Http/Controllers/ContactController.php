<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.contact.index');
    }
    public function contact_manage()
    {
        return view('admin.dashboard.contact.manage');
    }
}
