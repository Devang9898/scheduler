<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendUserCountMail extends Mailable
{
    use Queueable, SerializesModels;
    public $count;

    /**
     * Create a new message instance.
     */
    public function __construct($count)
    {
        //
        $a=10;
        $this->count=$count;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send User Count',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.usermail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    // public function build()
    // {
    //     return $this->subject('User Count Report')
    //                 ->view('emails.user_count')
    //                 ->with([
    //                     'count' => $this->count,
    //                 ]);
    // }
}
