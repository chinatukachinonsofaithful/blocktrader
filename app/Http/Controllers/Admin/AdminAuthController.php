<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminAuthController extends Controller
{
    public function index()
    {
        $page_title = "Admin";
        if (Auth::check() && Auth::user()->role_id >= 2) {
            return redirect()->intended('admin/dashboard');
            
        } else {
            return view('admin.login', compact('page_title'));
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors()->first())->withInput();
        }

        $log = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($log) {
            if (Auth::user()->role_id >= 2) {
                return redirect()->intended('admin/dashboard');
            } else {
                return back()->with("error", 'Access denied')->withInput();
            }
        } else {
            return back()->with('error', 'Invalid login details');
        }
    }
}
