<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class RegisterPageController extends Controller
{
   public function index()
   {
      return view('client.container.register.register', ['title' => 'Register - Divine Solution Funding']);
   }
}