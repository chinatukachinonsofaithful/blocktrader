<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerificationMail extends Mailable
{
    use SerializesModels;

    public $user;
    public $verificationUrl;

    public function __construct($user, $verificationUrl)
    {
        $this->user = $user;
        $this->verificationUrl = $verificationUrl;
    }

    public function build()
    {
        return $this->from(
                        config('mail.from.address'), // Use MAIL_FROM_ADDRESS from .env
                        config('mail.from.name', config('app.name')) // Use MAIL_FROM_NAME or fallback to APP_NAME
                    )
                    ->subject('Verify Your Email Address')
                    ->view('emails.verification')
                    ->withSwiftMessage(function ($message) {
                        $headers = $message->getHeaders();
                        $headers->remove('X-Mailer'); // Remove Laravel-specific mailer header
                    });
    }
    
}
