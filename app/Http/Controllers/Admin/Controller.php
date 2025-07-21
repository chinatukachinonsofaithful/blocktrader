<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController; // Extend the base controller
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    /**
     * Check if the logged-in user is an admin.
     *
     * @return \Illuminate\Http\RedirectResponse|null
     */
    public function admincheck()
    {
        $user = Auth::user();

        if ($user && $user->role_id != 2) {
            // If the user is not an admin, redirect them with a message
            return redirect(url('login'))->with('alert_info', 'Access denied!');
        }

        // Return null if the user is an admin (to continue further actions)
        return null;
    }
}
