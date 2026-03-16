<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class StudentFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdf;
    public $fileName;

    /**
     * Create a new message instance.
     */
    public function __construct($pdf, $fileName)
    {
        $this->pdf = $pdf;
        $this->fileName = $fileName;
    }

    /**
     * Email subject
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Student Admission Form',
        );
    }

    /**
     * Email body view
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.student',
        );
    }

    /**
     * Attach PDF
     */
    public function attachments(): array
    {
        return [
            Attachment::fromData(fn() => $this->pdf, $this->fileName)
                ->withMime('application/pdf'),
        ];
    }
}
