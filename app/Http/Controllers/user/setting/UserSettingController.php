<?php

namespace App\Http\Controllers\User\Setting;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserSettingController extends Controller
{
   public function index()
   {
      $user = Auth::user();

      if ($user && $user->role === 'user') {
         return view('client.dashboard.container.setting.listings', [
            'user' => $user,
            'title' => 'Setting - Divine Solution Funding'
         ]);
      }

      abort(403, 'Unauthorized access.');
   }
   public function update(Request $request, $id)
   {
      try {
         $user = User::findOrFail($id);
         if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
         }

         $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
         ]);

         if ($request->has('name')) {
            $user->name = $validatedData['name'];
         }

         if ($request->has('email') && $request->email !== $user->email) {
            $existingUser = User::where('email', $request->email)->first();
            if ($existingUser) {
               return response()->json(['error' => 'Email already exists.'], 409);
            }
            $user->email = Str::lower($validatedData['email']);
         }

         if ($request->hasFile('image')) {
            $storage = Storage::disk('public');

            if ($user->image && $storage->exists($user->image)) {
               $storage->delete($user->image);
            }

            $imageName = 'profile/' . Str::random(32) . "." . $request->image->getClientOriginalExtension();
            $storage->put($imageName, file_get_contents($request->image->getRealPath()));

            $user->image = $imageName;
         }

         $user->save();

         return redirect()->back()->with('success', 'Profile updated successfully!');
      } catch (\Exception $e) {
         return redirect()->back()->with('error', 'An error occurred while updating the profile.');
      }
   }
}
