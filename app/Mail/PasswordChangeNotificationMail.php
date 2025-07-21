<?php


namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordChangeNotificationMail extends Mailable
{
    use SerializesModels;

    public $user;
    public $passwordResetUrl;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
{
    return $this->from(
                    config('mail.from.address'), // Use MAIL_FROM_ADDRESS from .env
                    config('mail.from.name', config('app.name')) // Use MAIL_FROM_NAME or fallback to APP_NAME
                )
                ->subject('Password Notification')
                ->view('emails.password_change')
                ->withSwiftMessage(function ($message) {
                    $headers = $message->getHeaders();
                    $headers->remove('X-Mailer'); // Remove Laravel-specific mailer header
                });
}

}
