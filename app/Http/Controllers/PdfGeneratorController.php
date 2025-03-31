<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfGeneratorController extends Controller
{
    public function generatePdf(Request $request)
    {
        return view('pdf.modelo-ats');
        dd($request);
    }
}
