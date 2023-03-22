<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index', ['abouts' => About::where('status', 1)->orderBy('id', 'desc')->take(1)->get()]);
    }
}
