<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PreLoanApplication;
use App\Http\Controllers\Controller;

class PreLoanApplicationController extends Controller
{
   public function submitForm(Request $request)
   {
      $data = $request->all();
      $application = PreLoanApplication::create($data);
      return redirect()->back()->with('success', 'Application submitted!')->with('app_id', $application->id);
   }

   public function downloadPDF($id)
   {
      $application = PreLoanApplication::findOrFail($id);
      $pdf = app('dompdf.wrapper');
      $pdf->loadView('preloan-pdf', compact('application'));
      return $pdf->download('preloan_application_' . $id . '.pdf');
   }
}
