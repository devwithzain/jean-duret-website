<?php

namespace App\Http\Controllers\Client;

use App\Models\Service;
use App\Http\Controllers\Controller;

class ServicesPageController extends Controller
{
   public function index()
   {
      $services = Service::latest()->get();
      return view('client.container.services.services', ['title' => 'Services - Divine Solution Funding', 'services' => $services]);
   }
}
