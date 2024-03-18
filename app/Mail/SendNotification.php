<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendNotification extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
    * Create a new message instance.
    *
    * @return void
    */
    public function __construct(array $data)
    {
    $this->data = $data;
    }
    /**
    * Build the message.
    *
    * @return $this
    */
    public function build()
    {
        return $this->subject('Notification of Account Activation')
        ->view('mails.notification');
    }
 }