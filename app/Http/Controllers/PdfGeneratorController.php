<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Spatie\LaravelPdf\Facades\Pdf;

class PdfGeneratorController extends Controller
{
    public function generatePdf(Request $request)
    {
        $data =  $request->all();

        $data['educations'] = json_decode($request->input('educations'), true);
        $data['experiences'] = json_decode($request->input('experiences'), true);

        $document = Document::create([
            'nome' => "Document Ats ".date('Y-m-d H:i:s'),
        ]);

        $pdf = Pdf::view('pdf.modelo-ats', $data)
            ->withBrowsershot(function (Browsershot $browsershot) {
            $browsershot->noSandbox();
        })->save(storage_path('app/public/documentats'.$document->id.'.pdf'));

        if (Auth()->user()) {
            $document->user_id = Auth()->user()->id;
        }
        $document->path = 'storage/documentats'.$document->id.'.pdf';
        $document->save();

        return response()->download(storage_path('app/public/documentats'.$document->id.'.pdf'), 'document.pdf');
    }
}
