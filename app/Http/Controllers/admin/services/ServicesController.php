<?php

namespace App\Http\Controllers\Admin\Services;

use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;

class ServicesController extends Controller
{
   public function index()
   {
      $services = Service::all();
      return view('admin.container.services.index', compact('services'), ['title' => 'Create - Divine Solution Funding']);
   }
   public function create()
   {
      return view('admin.container.services.create', ['title' => 'Create - Divine Solution Funding']);
   }

   public function store(ServiceRequest $request)
   {
      $request->validated();

      Service::create([
         'title' => $request->title,
         'completed' => false,
      ]);

      return redirect()->route('admin.container.services.index')->with('success', 'ToDo added successfully!');
   }

   // Display a single todo
   public function show($id)
   {
      $todo = Service::findOrFail($id);
      return view('todos.show', compact('todo'));
   }

   // Show form to edit a todo
   public function edit($id)
   {
      $todo = Service::findOrFail($id);
      return view('admin.container.services.edit', compact('todo'));
   }

   // Update a todo
   public function update(ServiceRequest $request, $id)
   {
      $request->validate([
         'title' => 'required|string|max:255',
         'completed' => 'boolean',
      ]);

      $todo = Service::findOrFail($id);
      $todo->update([
         'title' => $request->title,
         'completed' => $request->has('completed'),
      ]);

      return redirect()->route('admin.container.services.index')->with('success', 'ToDo updated successfully!');
   }

   // Delete a todo
   public function destroy($id)
   {
      $todo = Service::findOrFail($id);
      $todo->delete();

      return redirect()->route('admin.container.services.delete')->with('success', 'ToDo deleted successfully!');
   }
}