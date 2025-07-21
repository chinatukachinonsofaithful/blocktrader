<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KycNotificationMail extends Mailable
{
    use SerializesModels;

    public $user;
    public $kycVerificationUrl;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->from(
            config('mail.from.address'),  // MAIL_FROM_ADDRESS from .env
            config('mail.from.name', config('app.name')) // MAIL_FROM_NAME or fallback to APP_NAME
        ) // Use MAIL_FROM_ADDRESS and APP_NAME
                    ->subject('KYC Notification')                // Set the subject
                    ->view('emails.kyc')                                  // Specify the email view
                    ->withSwiftMessage(function ($message) {
                        $headers = $message->getHeaders();
                        $headers->remove('X-Mailer');                     // Remove Laravel-specific mailer header
                    });
    }
    
}
