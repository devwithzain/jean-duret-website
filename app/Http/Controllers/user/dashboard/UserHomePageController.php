<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Http\Controllers\Controller;

class UserHomePageController extends Controller
{
   public function index()
   {
      return view('client.dashboard.container.home.dashboard', ['title' => 'User - Divine Solution Funding']);
   }
}
