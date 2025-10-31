<?php

namespace App\Http\Controllers;

use App\Mail\NewContactUsMail;
use App\Mail\NewRegistrationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingPageController extends Controller
{
    public function index ()
    {
        return view('screens.guest.index');
    }

    public function register(Request $request)
    {
        $admin = User::where('role','admin')->first();
        $registrationData = $request->except('_token');

        try {

            Mail::to($admin->email)->send(new NewRegistrationMail($registrationData));

            return response()->json([
                'status' => true,
                'message' => 'Registration Request Sent Successfully. Kindly Wait For Admin Approval.'
            ],200);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => $e
            ],404);
        }
    }

    public function contactUs(Request $request)
    {
        $admin = User::where('role','admin')->first();
        $contactData = $request->except('_token');

        try {

            Mail::to($admin->email)->send(new NewContactUsMail($contactData));

            return response()->json([
                'status' => true,
                'message' => 'Contact Us Data Has Been Sent Successfully, Thank You!'
            ],200);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => $e
            ],404);
        }
    }

    // Create NewsLetter Model & migration & Admin Side View.
    public function newsLetter(Request $request)
    {
        dd($request->all());

        try {
            NewsLetter::create($request->all());

            return response()->json([
                'status' => true,
                'message' => 'You Have Successfully Subscribed To Our News Letter!'
            ],200);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => $e,
            ],404);

        }
    }
}
