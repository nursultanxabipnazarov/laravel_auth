<?php

namespace App\Http\Controllers;

use App\Livewire\Applic;
use App\Models\Application;
use App\Models\Attachment;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{

    public function generatePDF()
    {
        // $data = Application::get();
        $data = ['title' => 'domPDF in Laravel 10'];
        $pdf = PDF::loadView('admin.pdf',$data);
        return $pdf->download('document.pdf');
        // return view('admin.pdf');
    }

}
