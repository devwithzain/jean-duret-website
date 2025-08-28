<?php

namespace App\Http\Controllers\User\Loan;

use App\Http\Controllers\Controller;

class LoanController extends Controller
{
   public function index()
   {
      return view('client.dashboard.container.loan.pre-loadn',  ['title' => 'Pre Loan - Divine Solution Funding']);
   }
}
