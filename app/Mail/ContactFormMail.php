<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class ContactFormMail extends Mailable
{
   use Queueable, SerializesModels;

   public $first_name;
   public $last_name;
   public $service;
   public $email;
   public $phone;
   public $specialMessage;
   public $subject;

   public function __construct($subject, $data)
   {
      $this->first_name = $data['first_name'];
      $this->last_name = $data['last_name'];
      $this->service = $data['service'];
      $this->email = $data['email'];
      $this->phone = $data['phone'];
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
         view: 'email.contact',
         with: [
            'name' => $this->first_name,
            'lastName' => $this->last_name,
            'service' => $this->service,
            'email' => $this->email,
            'phone' => $this->phone,
            'specialMessage' => $this->specialMessage,
         ],
      );
   }

   public function attachments(): array
   {
      return [];
   }
}
