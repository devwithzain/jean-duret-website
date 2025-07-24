<?php

namespace App\Http\Controllers\User\Inquries;

use App\Models\BookService;
use App\Http\Controllers\Controller;

class InquriesController extends Controller
{
   public function index()
   {
      $bookings = BookService::with('service')
         ->where('user_id', auth()->user()?->id)
         ->latest()
         ->get();
      return view('client.dashboard.container.inquries.listings',  ['title' => 'Inquries - Divine Solution Funding'], compact('bookings'));
   }
}
