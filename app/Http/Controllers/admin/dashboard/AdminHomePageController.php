<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Models\User;
use App\Models\Service;
use App\Models\BookService;
use App\Models\PreLoanApplication;
use App\Models\NewsletterSubscriber;
use App\Http\Controllers\Controller;

class AdminHomePageController extends Controller
{
   public function index()
   {
      $services = Service::all();
      $inquries = BookService::all();
      $loan_applications = PreLoanApplication::all();
      $newsletterSubscriber = NewsletterSubscriber::all();
      $users = User::all()->where('role', 'user');
      return view('admin.container.home.dashboard', ['title' => 'Admin - Divine Solution Funding', 'users' => $users, 'loan_applications' => $loan_applications, 'services' => $services, 'inquries' => $inquries, 'newsletterSubscriber' => $newsletterSubscriber]);
   }
}
