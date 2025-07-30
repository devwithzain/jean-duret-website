<?php

namespace App\Http\Controllers\Client;

use App\Models\Service;
use App\Http\Controllers\Controller;

class ServiceDetailPageController extends Controller
{
   public function index($slug)
   {
      $services = Service::latest()->get();
      $service = Service::where('slug', $slug)->firstOrFail();
      return view('client.container.services-detail.service-detail', [
         'service' => $service,
         'services' => $services,
         'title' => 'Service Detail - Divine Solution Funding'
      ]);
   }
}
