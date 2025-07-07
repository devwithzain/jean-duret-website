<?php

namespace App\Http\Controllers;

class ServiceDetailPageController extends Controller
{
   public function index()
   {
      return view('container.services-detail.service-detail', ['title' => 'Service Detail - Divine Solution Funding']);
   }
}