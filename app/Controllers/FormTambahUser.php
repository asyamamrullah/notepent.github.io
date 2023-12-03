<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class FormTambahUser extends BaseController
{

    function __construct()
    {
        $this->model = new \App\Models\ModelUser();
    }
    public function simpan()
    {
        //dd($this->request->getVar());
        $this->model->save([
            'namaUser'=> $this->request->getVar('namaUser'),
            'email'=> $this->request->getVar('email'),
            'password'=> $this->request->getVar('password'),
            

        ]);

        return view('admin/v_form_user');
    }

    public function index()
    {
        $data=[
            'judul'=>'Form Tambah User',
            'subjudul'=>'Tambah User',
            'menu'=>'form tambah user',
            'submenu'=>'tambah data user',
            'page'=>'admin/v_form_user'
        ];
        return view('template/v_admin',$data); 
    }
}
