<?php

namespace App\Http\Controllers;

class AboutPageController extends Controller
{
   public function index()
   {
      return view('client.container.about.about', ['title' => 'About - Divine Solution Funding']);
   }
}
