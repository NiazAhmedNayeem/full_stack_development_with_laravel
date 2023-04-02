<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.project.index');
    }
    public function create_project(Request $request)
    {
        Project::personProject($request);
        return redirect('/dashboard/project')->with('message', 'Project Create Successfully');
    }
    public function project_manage()
    {
        return view('admin.dashboard.project.manage', ['projects' => Project::orderBy('id', 'desc')->get()]);
    }
}
