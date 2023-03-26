<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function user_feedback()
    {
        return view('admin.dashboard.feedback.manage');
    }
}
