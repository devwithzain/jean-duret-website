<?php

namespace App\Http\Controllers\User\Setting;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
         $user = User::findOrFail($id)->where('role', 'user')->first();
         if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
         }

         $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255|unique:users,email,' . $user->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'current_password' => 'required_with:password|string|nullable',
            'password' => ['nullable', 'confirmed', 'min:8'],
         ]);

         if (isset($validated['name'])) {
            $user->name = $validated['name'];
         }
         if (isset($validated['email'])) {
            $user->email = Str::lower($validated['email']);
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

         if (!empty($validated['password'])) {
            if (!isset($validated['current_password']) || !Hash::check($validated['current_password'], $user->password)) {
               return back()->withErrors(['current_password' => 'Current password is incorrect']);
            }
            $user->password = Hash::make($validated['password']);
         }

         $user->save();

         $msg = !empty($validated['password']) ? 'Profile and password updated successfully!' : 'Profile updated successfully!';
         return redirect()->back()->with('success', $msg);
      } catch (\Exception $e) {
         return redirect()->back()->with('error', 'An error occurred while updating the profile.');
      }
   }
}
