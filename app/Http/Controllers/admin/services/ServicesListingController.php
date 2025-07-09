<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;

class ServicesListingController extends Controller
{
   public function index()
   {
      return view('admin.container.services.services', ['title' => 'Services - Divine Solution Funding']);
   }
}