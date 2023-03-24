<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('admin.dashboard.home.index');
    }
    public function create(Request $request)
    {
        Home::createHome($request);
        return redirect('/dashboard/home/manage')->with('message', 'Home create successfully.');
    }
    public function home_manage()
    {
        return view('admin.dashboard.home.manage', ['homes' => Home::orderBy('id', 'desc')->get()]);
    }
    public function home_detail($id)
    {
        return view('admin.dashboard.home.detail', ['home' => Home::find($id)]);
    }
}
