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
    public function contact_detail($id)
    {
        return view('admin.dashboard.contact.detail', ['contact' => Contact::find($id)]);
    }
    public function contact_status($id)
    {
        return redirect('/dashboard/contact/manage')->with('message', Contact::contactStatus($id));
    }
    public function contact_delete($id)
    {
        Contact::contactDelete($id);
        return redirect('/dashboard/contact/manage')->with('message', 'Contact delete successfully.');
    }

}
