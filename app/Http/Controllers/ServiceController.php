<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
   public function index()
   {
      $services = Service::all();
      return view('container.services.services', compact('services'));
   }
   public function show($slug)
   {
      $service = Service::where('slug', $slug)->firstOrFail();
      return view('container.services-detail.service-detail', compact('service'));
   }
}