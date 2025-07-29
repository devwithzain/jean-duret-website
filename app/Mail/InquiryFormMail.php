<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class InquiryFormMail extends Mailable
{
   use Queueable, SerializesModels;

   public $name;
   public $email;
   public $phone;
   public $date;
   public $service;
   public $specialMessage;
   public $subject;

   public function __construct($subject, $data)
   {
      $this->name = $data['name'];
      $this->email = $data['email'];
      $this->phone = $data['phone'];
      $this->date = $data['phone'];
      $this->service = $data['service'];
      $this->specialMessage = $data['specialMessage'];
      $this->subject = $subject;
   }

   public function envelope(): Envelope
   {
      return new Envelope(
         subject: $this->subject,
      );
   }

   public function content(): Content
   {
      return new Content(
         view: 'email.inquiry',
         with: [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date' => $this->date,
            'service' => $this->service,
            'specialMessage' => $this->specialMessage,
         ],
      );
   }

   public function attachments(): array
   {
      return [];
   }
}
