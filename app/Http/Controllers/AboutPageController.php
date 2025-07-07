<?php

namespace App\Http\Controllers;

class AboutPageController extends Controller
{
   public function index()
   {
      return view('container.about.about', ['title' => 'About - Divine Solution Funding']);
   }
}