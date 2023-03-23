<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.resume.index');
    }
    public function index_resume_create(Request $request)
    {
        Resume::personResume($request);
        return redirect('/dashboard/resume/manage')->with('message', 'Resume detail create successfully');
    }
    public function resume()
    {
        return view('admin.dashboard.resume.resume');
    }
    public function resume_create(Request $request)
    {
        Resume::personResume($request);
        return redirect('/dashboard/resume/manage')->with('message', 'Resume create successfully');
    }
    public function resume_manage()
    {
        return view('admin.dashboard.resume.manage', ['resumes' => Resume::orderBy('id', 'desc')->get()]);
    }
    public function resume_edit($id)
    {
        return view('admin.dashboard.resume.edit', ['resume' => Resume::find($id)]);
    }
    public function resume_detail($id)
    {
        return view('admin.dashboard.resume.detail', ['resume' => Resume::find($id)]);
    }

}
