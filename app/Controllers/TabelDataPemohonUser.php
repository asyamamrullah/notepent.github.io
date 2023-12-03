<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TabelDataPemohonUser extends BaseController
{
    public function index()
    {
        $data=[
            'judul'=>'Tabel',
            'subjudul'=>'Tabel Data Pemohon',
            'menu'=>'tabel',
            'submenu'=>'tabel data pemohon',
            'page'=>'user/v_tb_dataPemohon'
        ];
        return view('template/v_admin',$data); 
    }
}
