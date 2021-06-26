<?php

namespace App\Http\Controllers;

use App\Models\Famillies;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware(['auth', 'unverified']);
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify');
    }

    public function notice()
    {
        return view('auth.verify');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect()->route('user.index');
    }

    public function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    }
}
