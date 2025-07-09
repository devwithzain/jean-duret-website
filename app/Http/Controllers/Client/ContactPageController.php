<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class ContactPageController extends Controller
{
   public function index()
   {
      return view('client.container.contact.contact', ['title' => 'Contact Us - Divine Solution Funding']);
   }
}