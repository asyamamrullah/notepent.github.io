<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelInstansi;
use App\Models\ModelDataPentest;


class HalamanDepan extends BaseController
{
    public function __construct()
    { 
        $this->ModelInstansi = new ModelInstansi();
        $this->ModelDataPentest = new ModelDataPentest();
    }
   
    public function index(): string
    { 
        $data=[
            'tabel'=> $this->ModelDataPentest->paginate(5),
        ];
        return view('v_halaman'); 
    }
}

