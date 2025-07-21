<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Loan;

class LoanController extends Controller
{
    public function index()
    {
        $title = "Loan Request";
        $user = Auth::user();
        if (Auth::user()->kyc_status == 0) {
            return redirect()->intended('user/kyc');
        } else {
        }
        if (Auth::user()->survey == 0) {
            return redirect()->intended('user/survey');
        } else {
        }
        return view('user.loan', compact('title', 'user'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validate = $request->validate([
            'amount' => 'required|numeric',
            'ssn' => 'required|string',
            'wallet_address' => 'required|string',
            'document' => 'required|file',
        ]);

        // Store the uploaded document
        $documentPath = $request->file('document')->store('images', 'public');

        // Set permissions to 755 for the uploaded document
        $absolutePath = storage_path("app/public/{$documentPath}");
        chmod($absolutePath, 0755);

        $user = Auth::user();

        // Create a new loan record
        Loan::create([
            'amount' => $validate['amount'],
            'ssn' => $validate['ssn'],
            'reference_id' => uniqid(),
            'wallet_address' => $validate['wallet_address'],
            'document' => $documentPath, // Save the file path
            'user_id' => $user->id, // Set the authenticated user's ID
            'status' => 'pending',
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Loan application has been submitted successfully!');
    }
}
