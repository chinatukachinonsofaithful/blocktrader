<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositNotificationMail extends Mailable
{
    use SerializesModels;

    public $user;
    public $depositAmount;
    public $depositId;
    public $depositStatus;

    public function __construct($user, $depositAmount, $depositId, $depositStatus)
    {
        $this->user = $user;
        $this->depositAmount = $depositAmount;
        $this->depositId = $depositId;
        $this->depositStatus = $depositStatus;
    }

   public function build()
{
    return $this->from(
        config('mail.from.address'),  // MAIL_FROM_ADDRESS from .env
        config('mail.from.name', config('app.name')) // MAIL_FROM_NAME or fallback to APP_NAME
    ) // Use MAIL_FROM_ADDRESS and MAIL_FROM_NAME or fallback to APP_NAME
                ->subject('Deposit Notification')                                                // Set the subject
                ->view('emails.deposit')                                                      // Specify the email view
                ->withSwiftMessage(function ($message) {
                    $headers = $message->getHeaders();
                    $headers->remove('X-Mailer');                                             // Remove Laravel-specific mailer header
                });
}

}
