<?php

namespace App\Http\Controllers;

class ServicesPageController extends Controller
{
   public function index()
   {
      return view('client.container.services.services', ['title' => 'Services - Divine Solution Funding']);
   }
}
