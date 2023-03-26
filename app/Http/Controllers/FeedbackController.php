<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function manage_feedback()
    {
        return view('admin.dashboard.feedback.manage', ['feedbacks' => Feedback::orderBy('id', 'desc')->get()]);
    }
    public function feedback_detail($id)
    {
        return view('admin.dashboard.feedback.detail', ['feedback' => Feedback::find($id)]);
    }
    public function feedback_delete($id)
    {
        Feedback::feedbackDelete($id);
        return redirect('/user-feedback')->with('message', 'Feedback delete successfully.');
    }
}
