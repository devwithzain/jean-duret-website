<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Models\BookService;
use App\Models\PreLoanApplication;
use App\Http\Controllers\Controller;

class UserHomePageController extends Controller
{
   public function index()
   {
      $loan_applications = PreLoanApplication::all();
      $bookings = BookService::with('service')
         ->where('user_id', auth()->user()->id)
         ->latest()
         ->get();
      return view('client.dashboard.container.home.dashboard', ['title' => 'User - Divine Solution Funding'], compact('bookings', 'loan_applications'));
   }
}
