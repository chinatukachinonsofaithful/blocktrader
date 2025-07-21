<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;

use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $title = "Login";
        return view('auth.login', compact('title'));
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }

    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            // Authenticate the user
            $request->authenticate();

            // Regenerate the session to prevent session fixation
            $request->session()->regenerate();

            // Redirect to the intended page or the default home page
            return redirect()->intended(RouteServiceProvider::HOME);
        } catch (AuthenticationException $e) {
            // If authentication fails, redirect back with an error message
            with('error', 'Settings updated successfully.');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
