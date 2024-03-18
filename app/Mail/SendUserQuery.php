<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendUserQuery extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public string $name;

    public function __construct($subject, string $name)
    {
        $this->subject = $subject;
        $this->name = $name;
    }

    public function build(): SendUserQuery
    {
        return $this->subject($this->subject)
            ->view('emails.mail_template', [
                'name' => $this->name
            ]);
    }
}
