<?php

namespace App\Http\Controllers;

class ContactPageController extends Controller
{
   public function index()
   {
      return view('client.container.contact.contact', ['title' => 'Contact Us - Divine Solution Funding']);
   }
}
