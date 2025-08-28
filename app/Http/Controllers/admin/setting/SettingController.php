<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
   public function index()
   {
      $user = Auth::user();

      if ($user && $user->role === 'admin') {
         return view('admin.container.setting.listings', [
            'user' => $user,
            'title' => 'Setting - Divine Solution Funding'
         ]);
      }

      abort(403, 'Unauthorized access.');
   }
   public function update(Request $request, $id)
   {
      try {
         $user = User::findOrFail($id)->where('role', 'admin')->first();
         if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
         }
         $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'current_password' => 'required_with:password|string|nullable',
            'password' => ['nullable', 'confirmed', 'min:8'],
         ]);

         if ($request->has('name')) {
            $user->name = $validatedData['name'];
         }

         if ($request->has('email') && $request->email !== $user->email) {
            $existingUser = User::where('email', $request->email)->first();
            if ($existingUser) {
               return response()->json(['error' => 'Email already exists.'], 409);
            }
            $user->email = $validatedData['email'];
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

         if (!empty($validatedData['password'])) {
            if (!isset($validatedData['current_password']) || !Hash::check($validatedData['current_password'], $user->password)) {
               return back()->withErrors(['current_password' => 'Current password is incorrect']);
            }
            $user->password = Hash::make($validatedData['password']);
         }

         $user->save();

         $msg = !empty($validated['password']) ? 'Profile and password updated successfully!' : 'Profile updated successfully!';
         return redirect()->back()->with('success', $msg);
      } catch (\Exception $e) {
         return redirect()->back()->with('error', 'An error occurred while updating the profile.');
      }
   }
}
