<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminHomePageController extends Controller
{
   public function index()
   {
      $users = User::all()->where('role', 'user');
      return view('admin.container.home.dashboard', ['title' => 'Admin - Divine Solution Funding', 'users' => $users]);
   }
}
