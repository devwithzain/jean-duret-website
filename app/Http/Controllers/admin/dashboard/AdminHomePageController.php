<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;

class AdminHomePageController extends Controller
{
   public function index()
   {
      return view('admin.container.home.dashboard', ['title' => 'Admin - Divine Solution Funding']);
   }
}
