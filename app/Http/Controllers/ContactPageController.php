<?php

namespace App\Http\Controllers;

class ContactPageController extends Controller
{
   public function index()
   {
      return view('container.contact.contact', ['title' => 'Contact Us - Divine Solution Funding']);
   }
}