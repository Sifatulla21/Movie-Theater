<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    public function __construct($user)
    {
        $this->user = $user;
    }


    public function build()
    {
        $user = $this->user;
        return $this->view('mail.user-register', compact('user'));
    }
}
