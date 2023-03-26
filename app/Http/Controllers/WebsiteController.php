<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Feedback;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Resume;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index', ['abouts' => About::where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
                                                'resumes' => Resume::where('status', 1)->orderBy('id', 'desc')->get(),
                                                'homes' => Home::where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
                                                'contacts' => Contact::where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
                                                'footers' => Footer::where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
            ]);
    }

    public function feedback(Request $request)
    {
        Feedback::userFeedback($request);
        return redirect('/#contact')->with('message', 'Your message send successfully, we will reply to you as soon as possible, Thank you.');
    }
}
