<?php

namespace App\Http\Controllers\Admin\Services;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
   public function index()
   {
      $services = Service::all();
      return view('admin.container.services.listings', compact('services'), ['title' => 'Create - Divine Solution Funding']);
   }
   public function create()
   {
      return view('admin.container.services.create', ['title' => 'Create - Divine Solution Funding']);
   }
   public function store(ServiceRequest $request)
   {
      $validatedData = $request->validated();
      $image = $request->file('image');
      $imageName = 'services/' . Str::random(32) . '.' . $image->getClientOriginalExtension();
      Storage::disk('public')->put($imageName, file_get_contents($image));

      Service::create([
         'title' => $validatedData['title'],
         'description' => $validatedData['description'],
         'short_description' => $validatedData['short_description'],
         'image' => $imageName,
      ]);

      return redirect()->route('admin.container.services.listings')->with('success', 'Service added successfully!');
   }
   public function show($id)
   {
      $service = Service::findOrFail($id);
      return view('admin.container.services', compact('service'));
   }
   public function edit($id)
   {
      $service = Service::findOrFail($id);
      return view('admin.container.services.edit', compact('service'), ['title' => 'Edit - Divine Solution Funding']);
   }
   public function update(Request $request, $id)
   {
      $service = Service::findOrFail($id);
      if (!$service) {
         return response()->json([
            'error' => 'Not Found.'
         ], 404);
      }

      $validatedData = $request->validate([
         'title' => 'nullable|string|max:255',
         'description' => 'nullable|string',
         'short_description' => 'nullable|string',
         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
      ]);

      // Update fields only if provided
      if ($request->has('title')) {
         $service->title = $validatedData['title'];
      }
      if ($request->has('description')) {
         $service->description = $validatedData['description'];
      }
      if ($request->has('short_description')) {
         $service->short_description = $validatedData['short_description'];
      }

      if ($request->hasFile('image')) {
         $storage = Storage::disk('public');

         // Delete old image if exists
         if ($service->image && $storage->exists($service->image)) {
            $storage->delete($service->image);
         }

         // Store new image
         $image = $request->file('image');
         $imageName = 'services/' . Str::random(32) . '.' . $image->getClientOriginalExtension();
         $storage->put($imageName, file_get_contents($image->getRealPath()));

         $service->image = $imageName;
      }

      $service->save();

      return redirect()->route('admin.container.services.listings')->with('success', 'ToDo updated successfully!');
   }
   public function destroy($id)
   {
      $service = Service::findOrFail($id);
      if (!$service) {
         return response()->json([
            'error' => 'Service Not Found.'
         ], 404);
      }
      if ($service->image) {
         Storage::disk('public')->delete($service->image);
      }
      $service->delete();

      return redirect()->route('admin.container.services.listings')->with('success', 'Service deleted successfully!');
   }
}
