<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Models\User;
use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Models\BookService;
use App\Models\PreLoanApplication;

class AdminHomePageController extends Controller
{
   public function index()
   {
      $users = User::all()->where('role', 'user');
      $loan_applications = PreLoanApplication::all();
      $services = Service::all();
      $inquries = BookService::all();
      return view('admin.container.home.dashboard', ['title' => 'Admin - Divine Solution Funding', 'users' => $users, 'loan_applications' => $loan_applications, 'services' => $services, 'inquries' => $inquries]);
   }
}
