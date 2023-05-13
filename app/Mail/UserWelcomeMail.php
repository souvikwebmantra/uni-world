<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public $user, public $password)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'User Welcome Mail',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.welcome',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
