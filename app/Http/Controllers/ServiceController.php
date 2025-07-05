<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
   public function index()
   {
      $services = Service::all();
      return view('container.services.services', compact('services'));
   }
   public function store(ServiceRequest $request)
   {
      $validatedData = $request->validated();
      $image = $request->file('image');
      $imageName = 'services/' . Str::random(32) . '.' . $image->getClientOriginalExtension();
      Storage::disk('public')->put($imageName, file_get_contents($image));
      $service = Service::create([
         'title' => $validatedData['title'],
         'description' => $validatedData['description'],
         'short_description' => $validatedData['short_description'],
         'image' => $imageName,
      ]);
      return response()->json([
         'message' => 'Service created successfully.',
         'service' => $service
      ]);
   }
   public function show($slug)
   {
      $service = Service::where('slug', $slug)->firstOrFail();
      return view('container.services-detail.service-detail', compact('service'));
   }
   public function update(ServiceRequest $request, string $id)
   {
      try {
         $service = Service::find($id);
         if (!$service) {
            return response()->json([
               'error' => 'Not Found.'
            ], 404);
         }

         $validatedData = $request->validated();

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

            if ($service->image && $storage->exists($service->image)) {
               $storage->delete($service->image);
            }

            $imageName = 'services/' . Str::random(32) . '.' . $request->image->getClientOriginalExtension();
            $storage->put($imageName, file_get_contents($request->image->getRealPath()));

            $service->image = $imageName;
         }

         $service->save();

         return response()->json([
            'success' => true,
            'message' => 'Service updated successfully.',
            'service' => $service
         ], 200);
      } catch (\Exception $e) {
         return response()->json([
            'message' => "Something went wrong!",
            'error' => $e->getMessage()
         ], 500);
      }
   }
   public function destroy(string $id)
   {
      $service = Service::find($id);
      if (!$service) {
         return response()->json([
            'error' => 'Service Not Found.'
         ], 404);
      }
      if ($service->image) {
         Storage::disk('public')->delete($service->image);
      }
      $service->delete();
      return response()->json([
         'message' => 'Service deleted successfully.'
      ]);
   }
}