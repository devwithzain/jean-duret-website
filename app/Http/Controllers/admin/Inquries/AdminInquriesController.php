<?php

namespace App\Http\Controllers\Admin\Inquries;

use App\Models\BookService;
use App\Http\Controllers\Controller;

class AdminInquriesController extends Controller
{
   public function index()
   {
      $bookings = BookService::with('service')->latest()->get();
      return view('admin.container.inquries.listings',  ['title' => 'Inquries - Divine Solution Funding'], compact('bookings'));
   }
}
