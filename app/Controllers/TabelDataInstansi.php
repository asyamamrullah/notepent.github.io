<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ModelDinas;

class TabelDataInstansi extends BaseController
{

    public function __construct()
    {
        $this->model = new \App\Models\ModelDinas();
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
            'judul'=>'Tabel',
            'subjudul'=>'Tabel Data Instansi',
            'menu'=>'tabel',
            'submenu'=>'tabel data instansi',
            'page'=>'admin/v_tb_dataInstansi',
        ];
        $data['katakunci'] = $katakunci;
        $data['dataInstansi'] = $pencarian->orderBy('id_dinas','desc')->paginate(10);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page'); 
        return view('template/v_admin',$data); 
    }
}
