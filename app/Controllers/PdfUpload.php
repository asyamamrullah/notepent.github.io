<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelPdf;

class PdfUpload extends Controller
{
    public function index()
    {
        return view('pdf_form');
    }

    public function upload()
    {
        $pdfFile = $this->request->getFile('pdf');

        // Pindahkan file PDF ke direktori tertentu
        $pdfFile->move(ROOTPATH . 'public/uploads', $pdfFile->getName());

        // Simpan informasi file ke database
        $modelPdf = new ModelPdf();
        $modelPdf->save([
            'nama_file' => $pdfFile->getName(),
            'file_pdf' => 'uploads/' . $pdfFile->getName(),
        ]);

        // Redirect ke halaman view
        return redirect()->to('/pdf/view/' . $modelPdf->insertID());
    }

    public function view($id)
    {
        $modelPdf = new ModelPdf();
        $data['pdf'] = $modelPdf->find($id);

        return view('pdf_view', $data);
    }
}

