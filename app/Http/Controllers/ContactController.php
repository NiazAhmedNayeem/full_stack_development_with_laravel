<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.contact.index');
    }
    public function contact_create(Request $request)
    {
        Contact::personContact($request);
        return redirect('/dashboard/contact/manage')->with('message', 'Contact create successfully.');
    }
    public function contact_manage()
    {
        return view('admin.dashboard.contact.manage', ['contacts' => Contact::orderBy('id', 'desc')->get()]);
    }
}
