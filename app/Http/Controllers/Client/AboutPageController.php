<?php

namespace App\Http\Controllers\Client;

use App\Models\Service;
use App\Http\Controllers\Controller;

class AboutPageController extends Controller
{
   public function index()
   {
      $services = Service::latest()->get();
      return view('client.container.about.about', ['title' => 'About - Divine Solution Funding', 'services' => $services]);
   }
}