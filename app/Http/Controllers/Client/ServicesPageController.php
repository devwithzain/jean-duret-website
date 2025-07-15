<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ServicesPageController extends Controller
{
   public function index()
   {
      return view('client.container.services.services', ['title' => 'Services - Divine Solution Funding']);
   }
}
