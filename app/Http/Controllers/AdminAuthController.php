<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.admin.index');
    }
    public function create(Request $request)
    {
        User::newAdmin($request);
        return redirect('/dashboard/admin/manage')->with('message', 'Admin create successfully.');
    }
    public function manage()
    {
        return view('admin.dashboard.admin.manage', ['users' => User::orderBy('id', 'desc')->get()]);
    }
    public function delete($id)
    {
        User::adminDelete($id);
        return redirect('/dashboard/admin/manage')->with('message', 'Admin delete successfully.');
    }
}
