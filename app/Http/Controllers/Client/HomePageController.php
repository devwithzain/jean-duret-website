<?php

namespace App\Http\Controllers\Client;

use App\Models\Service;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
   public function index()
   {
      $services = Service::all();
      return view('client.container.home.home')->with(compact('services'))->with(['title' => 'Home - Divine Solution Funding']);
   }
   public function show($id)
   {
      $service = Service::findOrFail($id);
      return view('client.container.home.home')->with(compact('service'));
   }
}
