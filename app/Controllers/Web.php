<?php

namespace App\Controllers;
use App\Models\ModelPentest;
use App\Models\ModelInstansi;

class Web extends BaseController
{

    public function __construct()
    {
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

        $data=[
            'judul'=>'Dahsboard',
            'subudul'=>'',
            'menu'=>'dashboard',
            'submenu'=>'',
            'page'=>'admin/v_dashboard',
        ];
        $data['katakunci'] = $katakunci;
        $data['dataPentest'] = $pencarian->orderBy('id','desc')->paginate(2);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page'); 
        return view('template/v_admin',$data); 
    }
}

