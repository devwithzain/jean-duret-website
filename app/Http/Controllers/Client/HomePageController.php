<?php

namespace App\Http\Controllers\Client;

use App\Models\Service;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
   public function index()
   {
      $services = Service::latest()->get();

      return view('client.container.home.home', [
         'title' => 'Home - Divine Solution Funding',
         'services' => $services,
      ]);
   }
}
