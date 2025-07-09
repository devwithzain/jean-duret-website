<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class LoginPageController extends Controller
{
   public function index()
   {
      return view('client.container.login.login', ['title' => 'LogIn - Divine Solution Funding']);
   }
}