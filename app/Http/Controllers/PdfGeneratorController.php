<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class PdfGeneratorController extends Controller
{
    public function generatePdf(Request $request)
    {
        $data =  $request->all();

        $document = Document::create([
            'nome' => "Document Ats ".date('Y-m-d H:i:s'),
        ]);

        $pdf = Pdf::view('pdf.modelo-ats', $data)->save(storage_path('app/public/documentats'.$document->id.'.pdf'));

        if (Auth()->user()) {
            $document->user_id = Auth()->user()->id;
        }
        $document->path = 'storage/documentats'.$document->id.'.pdf';
        $document->save();

        return response()->download(storage_path('app/public/documentats'.$document->id.'.pdf'), 'document.pdf');
    }
}
