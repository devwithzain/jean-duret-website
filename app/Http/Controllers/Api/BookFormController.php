<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\BookService;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
            'password' => Hash::make('defaultPassword123'),
         ]);
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

      BookService::create($data);

      return redirect()->back()->with('success', 'Your inquiry has been submitted.');
   }
}
