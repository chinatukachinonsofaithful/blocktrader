<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WithdrawNotificationMail extends Mailable
{
    use SerializesModels;

    public $user;
    public $withdrawAmount;
    public $withdrawId;
    public $withdrawStatus;

    public function __construct($user, $withdrawAmount, $withdrawId, $withdrawStatus)
    {
        $this->user = $user;
        $this->withdrawAmount = $withdrawAmount;
        $this->withdrawId = $withdrawId;
        $this->withdrawStatus = $withdrawStatus;
    }

    public function build()
    {
        return $this->from(
                        config('mail.from.address'), // Use MAIL_FROM_ADDRESS from .env
                        config('mail.from.name', config('app.name')) // Use MAIL_FROM_NAME or fallback to APP_NAME
                    )
                    ->subject('Withdrawal Notification')
                    ->view('emails.withdraw')
                    ->withSwiftMessage(function ($message) {
                        $headers = $message->getHeaders();
                        $headers->remove('X-Mailer'); // Remove Laravel-specific mailer header
                    });
    }
    
}
