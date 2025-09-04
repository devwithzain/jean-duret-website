<?php

namespace App\Http\Controllers\Admin\Application;

use App\Models\PreLoanApplication;
use App\Http\Controllers\Controller;

class AdminApplicationController extends Controller
{
   public function index()
   {
      $loan_applications = PreLoanApplication::all();
      return view('admin.container.application.application',  ['title' => 'Applications - Divine Solution Funding'], compact('loan_applications'));
   }
   public function downloadPDF($id)
   {
      $application = PreLoanApplication::findOrFail($id);
      $pdf = app('dompdf.wrapper');
      $pdf->loadView('admin.container.application.submission', compact('application'));
      return $pdf->download('application-' . $application->id . '.pdf');
   }
}
