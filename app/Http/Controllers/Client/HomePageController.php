<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
   public function index()
   {
      return view('client.container.home.home')->with(['title' => 'Home - Divine Solution Funding']);
   }
}
