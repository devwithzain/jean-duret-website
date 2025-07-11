<?php

namespace App\Http\Controllers\Api;

use App\Mail\ContactFormMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
   public function sendContactForm(ContactFormRequest $request)
   {
      $data = $request->validated();
      $subject = "New Contact from " . $data['first_name'];

      try {
         Mail::to(config('mail.from.address'))->send(new ContactFormMail($subject, data: $data));
         return redirect()->back()->with('success', 'Your message was sent successfully!');
      } catch (\Exception $e) {
         return redirect()->back()->with('error', 'Failed to send your message. Please try again later.' . $e->getMessage());
      }
   }
}
