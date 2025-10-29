<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::with('user')->get();
        return view('screens.admin.feedbacks.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('screens.web.feedback.index');
    }

    public function store(Request $request)
    {
        try {

            $feedback = Feedback::create([
                'user_id' => auth()->id(),
                'subject' => $request->subject,
                'feedback' => $request->feedback,
            ]);

            return response()->json([
                'status' => true,
                'feedback' => $feedback,
                'message' => 'Feedback Created Successfully.'
            ],200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'feedback' => null,
                'message' => $e,
            ],404);
        }
    }
}
