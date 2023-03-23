<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Resume;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index', ['abouts' => About::where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
                                                'resumes' => Resume::where('status', 1)->orderBy('id', 'desc')->get(),
            ]);
    }
}
