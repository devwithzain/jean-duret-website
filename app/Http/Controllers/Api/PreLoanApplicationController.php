<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PreLoanApplication;
use App\Http\Controllers\Controller;

class PreLoanApplicationController extends Controller
{
   public function index()
   {
      $loan_applications = PreLoanApplication::all();
      return view('client.dashboard.container.my-loan.my_loan', compact('loan_applications'));
   }
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
      $pdf->loadView('client.dashboard.container.my-loan.submission', compact('application'));
      return $pdf->download('application-' . $application->id . '.pdf');
   }
}
