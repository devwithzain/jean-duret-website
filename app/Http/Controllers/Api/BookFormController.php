<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Service;
use App\Models\BookService;
use Illuminate\Support\Str;
use App\Mail\InquiryFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\BookServiceRequest;

class BookFormController extends Controller
{
   public function bookService(BookServiceRequest $request)
   {
      $validatedData = $request->validated();

      $user = User::where('email', $validatedData['email'])->first();

      if (!$user) {
         $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make(Str::random(12)),
         ]);
         $isNewUser = true;
      }

      Auth::login($user);

      $data = $request->all();
      $data['user_id'] = Auth::id();

      $imageName = null;
      if ($request->hasFile('image')) {
         $image = $request->file('image');
         $imageName = 'bookService/' . Str::random(32) . '.' . $image->getClientOriginalExtension();
         Storage::disk('public')->put($imageName, file_get_contents($image));
      }

      if ($isNewUser) {
         $status = Password::sendResetLink(['email' => $user->email]);

         if ($status !== Password::RESET_LINK_SENT) {
            return back()->withErrors(['email' => __($status)]);
         }
      }

      BookService::create($data);

      $service = Service::find($data['service_id']);
      $data['service'] = $service ? $service->title : 'Unknown Service';

      Mail::to(config('mail.from.address'))->send(new InquiryFormMail("New Inquiry from " . $data['name'], $data));

      Mail::to($data['email'])->send(new InquiryFormMail("New Inquiry from " . $data['name'], $data));

      if ($isNewUser) {
         Password::sendResetLink(['email' => $user->email]);
      }

      return redirect()->back()->with('success', 'Your inquiry has been submitted.');
   }
}
