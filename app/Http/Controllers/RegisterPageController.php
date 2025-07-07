<?php

namespace App\Http\Controllers;

class RegisterPageController extends Controller
{
   public function index()
   {
      return view('container.register.register', ['title' => 'Register - Divine Solution Funding']);
   }
}