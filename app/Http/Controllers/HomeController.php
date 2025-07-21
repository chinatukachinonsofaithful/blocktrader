<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title = "home";
        return view('home', compact('title'));
    }
    public function contact()
    {
        $title = "Contact Us";
        return view('contact', compact('title'));
    }
   
    
    public function submit(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required',
        'g-recaptcha-response' => 'required', // Ensure reCAPTCHA response is provided
    ]);

    // Verify reCAPTCHA response
    $recaptcha = new \ReCaptcha\ReCaptcha(env('RECAPTCHA_SECRET_KEY'));
    $response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());

    if (!$response->isSuccess()) {
        return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
    }

    // Send email or save to the database
    Mail::raw($validated['message'], function ($message) use ($validated) {
        $message->to(env('MAIL_FROM_ADDRESS')) // Retrieve the MAIL_FROM_ADDRESS from .env
                ->subject('Contact Form Submission')
                ->from($validated['email'], $validated['name']);
    });

    return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
}

    public function terms()
    {
        $title = "Terms & Condition";
        return view('terms', compact('title'));
    }
    public function policy()
    {
        $title = "Policy & Privacy";
        return view('policy', compact('title'));
    }

    public function faqs()
    {
        $title = "Faqs";
        return view('faqs', compact('title'));
    }

    public function about()
    {
        $title = "About Us";
        return view('about', compact('title'));
    }
}
