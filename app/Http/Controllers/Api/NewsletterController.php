<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterVerificationMail;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
   public function subscribe(Request $request)
   {
      $validator = Validator::make($request->all(), [
         'email' => 'required|email',
      ]);

      if ($validator->fails()) {
         return back()->withErrors($validator)->withInput();
      }

      $email = $request->input('email');

      // Check if email is already subscribed
      if (NewsletterSubscriber::where('email', $email)->exists()) {
         return back()->with('error', 'This email is already subscribed.');
      }

      try {
         Mail::to($email)->send(new NewsletterVerificationMail());
         NewsletterSubscriber::create([
            'email' => $email,
            'subscribed_at' => now(),
         ]);
         return back()->with('success', 'You have been subscribed successfully!');
      } catch (\Exception $e) {
         return back()->with('error', 'Email could not be delivered. Try again later.');
      }
   }
}
