<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $password_reset;
    public function __construct($password_reset)
    {
        $this->password_reset = $password_reset;
    }


    public function build()
    {
        $password_reset = $this->password_reset;
        return $this->view('mail.password-reset', compact('password_reset'));
    }
}
