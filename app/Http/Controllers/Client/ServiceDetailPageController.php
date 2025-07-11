<?php

namespace App\Http\Controllers\Client;

use App\Models\Service;
use App\Http\Controllers\Controller;

class ServiceDetailPageController extends Controller
{
   public function index($slug)
   {
      $service = Service::where('slug', $slug)->firstOrFail();
      return view('client.container.services-detail.service-detail', [
         'service' => $service,
         'title' => 'Service Detail - Divine Solution Funding'
      ]);
   }
}
