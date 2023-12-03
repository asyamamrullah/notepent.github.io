<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelInstansi;
use App\Models\ModelPentest;


class Home extends BaseController
{
   
    public function __construct()
    { 
        $this->ModelInstansi = new ModelInstansi();
        $this->model = new \App\Models\ModelPentest();
    }
   
    public function index()
    {
        
        $katakunci = $this->request->getGet('katakunci');
        if($katakunci)
        {
            $pencarian = $this->model->cari($katakunci);
        }
        else 
        {
            $pencarian = $this->model;
        }

        $data['katakunci'] = $katakunci;
        $data['dataPentest'] = $pencarian->orderBy('id','desc')->paginate(5);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page'); 
        return view('v_landing_page',$data); 
    }
}

