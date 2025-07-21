<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class SmtpSettingsController extends Controller
{
    public function index()
    {
        $page_title = "SMTP";


        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        // Get the current SMTP settings from the .env file
        return view('admin.settings.smtp', compact('page_title'), [
            'mail_mailer' => env('MAIL_MAILER'),
            'mail_host' => env('MAIL_HOST'),
            'mail_port' => env('MAIL_PORT'),
            'mail_username' => env('MAIL_USERNAME'),
            'mail_password' => env('MAIL_PASSWORD'),
            'mail_encryption' => env('MAIL_ENCRYPTION'),
            'mail_from_address' => env('MAIL_FROM_ADDRESS'),
            'mail_from_name' => env('MAIL_FROM_NAME'),
        ]);
    }


    public function update(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'mail_mailer' => 'required|string',
            'mail_host' => 'required|string',
            'mail_port' => 'required|integer',
            'mail_username' => 'required|string',
            'mail_password' => 'required|string',
            'mail_encryption' => 'required|string',
            'mail_from_address' => 'required|email',
            'mail_from_name' => 'required|string',
        ]);

        // Update the .env file
        $this->updateEnv([
            'MAIL_MAILER' => $request->mail_mailer,
            'MAIL_HOST' => $request->mail_host,
            'MAIL_PORT' => $request->mail_port,
            'MAIL_USERNAME' => $request->mail_username,
            'MAIL_PASSWORD' => $request->mail_password,
            'MAIL_ENCRYPTION' => $request->mail_encryption,
            'MAIL_FROM_ADDRESS' => $request->mail_from_address,
            'MAIL_FROM_NAME' => $request->mail_from_name,
        ]);

        // Clear the config cache
        Artisan::call('config:cache');

        return redirect()->route('admin.smtp-settings')->with('success', 'SMTP settings updated successfully.');
    }


    protected function updateEnv(array $data)
    {
        $path = base_path('.env');

        if (file_exists($path)) {
            $content = file_get_contents($path);

            foreach ($data as $key => $value) {
                $pattern = "/^$key=.*$/m";
                $replacement = "$key=$value";
                $content = preg_replace($pattern, $replacement, $content);
            }

            file_put_contents($path, $content);
        }
    }
}
