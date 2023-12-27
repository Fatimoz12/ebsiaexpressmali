<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormDataSubmited extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
       $this->data = $data;
       //dd($this->data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    /**
     * Get the message envelope.
     */
  /*  public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Form Data Submitted',
        );
    }*/

    /**
     * Get the message content definition.
     */
    public function build(): FormDataSubmited
    {
       // return $this->view('emails.form_data')->with(['data' => $this->data]);
        return $this->from('contact@ebsiaexpress.com')->subject('Un nouveau message !    ')->view('emails.form_data');
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














