<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Job;

class JobPosted extends Mailable
{
    use Queueable, SerializesModels;

    public $job; 
    /**
     * Create a new message instance.
     */
    public function __construct(public Job $Job)
    {

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Job Posted',
        );
    }

    public function build()
    {
        return $this->view('mail.job-posted') // Specify the email view
                    ->subject('Your Job is Now Live!')
                    ->with(['job' => $this->job]); // Pass $job to the view
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.job-posted',
            with: []
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
}
