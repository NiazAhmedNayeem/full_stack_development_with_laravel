<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.footer.index');
    }
    public function footer_create(Request $request)
    {
        Footer::createFooter($request);
        return redirect('/dashboard/footer/manage')->with('message', 'Create footer successfully.');
    }
    public function footer_manage()
    {
        return view('admin.dashboard.footer.manage', ['footers' => Footer::orderBy('id', 'desc')->get()]);
    }
    public function footer_detail($id)
    {
        return view('admin.dashboard.footer.detail', ['footer' => Footer::find($id)]);
    }

}
