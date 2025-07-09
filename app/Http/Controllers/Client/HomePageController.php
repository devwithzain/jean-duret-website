<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
   public function index()
   {
      return view('client.container.home.home', ['title' => 'Divine Solution Funding']);
   }
}