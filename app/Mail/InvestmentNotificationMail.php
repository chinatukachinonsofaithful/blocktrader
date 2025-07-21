<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvestmentNotificationMail extends Mailable
{
    use SerializesModels;

    public $user;
    public $investmentAmount;
    public $investmentId;
    public $investmentStatus;

    public function __construct($user, $investmentAmount, $investmentId, $investmentStatus)
    {
        $this->user = $user;
        $this->investmentAmount = $investmentAmount;
        $this->investmentId = $investmentId;
        $this->investmentStatus = $investmentStatus;
    }

    public function build()
    {
        return $this->from(
                        config('mail.from.address'), // Use MAIL_FROM_ADDRESS from .env
                        config('mail.from.name', config('app.name')) // Use MAIL_FROM_NAME or fallback to APP_NAME
                    )
                    ->subject('Investment Notification')
                    ->view('emails.investment')
                    ->withSwiftMessage(function ($message) {
                        $headers = $message->getHeaders();
                        $headers->remove('X-Mailer'); // Remove Laravel-specific mailer header
                    });
    }
    
}
