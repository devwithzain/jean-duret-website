<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminHomePageController extends Controller
{
   public function index()
   {
      return view('admin.container.home.home', ['title' => 'Admin - Divine Solution Funding']);
   }
}