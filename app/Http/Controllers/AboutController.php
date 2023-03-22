<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.about.index');
    }
    public function about_create(Request $request)
    {
        About::personAbout($request);
        return redirect('/dashboard/about/manage')->with('message', 'Person about create successfully.');
    }
    public function about_manage()
    {
        return view('admin.dashboard.about.manage', ['abouts' => About::orderBy('id', 'desc')->get()]);
    }
    public function updateStatus($id)
    {
        return redirect('/dashboard/about/manage')->with('message', About::updateAboutStatus($id));
    }
    public function edit($id)
    {
        return view('admin.dashboard.about.edit', ['about' => About::find($id)]);
    }
    public function update(Request $request, $id)
    {
        About::aboutUpdate($request, $id);
        return redirect('/dashboard/about/manage')->with('message', 'About update successfully.');
    }
}
