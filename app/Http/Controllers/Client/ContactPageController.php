<?php

namespace App\Http\Controllers\Client;

use App\Models\Service;
use App\Http\Controllers\Controller;

class ContactPageController extends Controller
{
   public function index()
   {
      $services = Service::latest()->get();
      return view('client.container.contact.contact', ['title' => 'Contact Us - Divine Solution Funding', 'services' => $services]);
   }
}
