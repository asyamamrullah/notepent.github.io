<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class TabelUser extends BaseController
{
    public function __construct()
    {
        $this->model = new \App\Models\ModelUser();
    }

    public function hapus($id)
    {
        $this->model->delete($id);
        return redirect()->to('tabeluser');

    }

    public function edit($id)
    {
        return json_encode($this->model->find($id));
    }

    public function simpan() 
    {
        $validasi = \config\Services::validation();
        $aturan = [
            'namauser' => [
                'label' => 'Nama User',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 5 karakter',
                ],
            ],
            
            'email' => [
                'label' => 'Email',
                'rules' => 'required|min_length[5]|valid_email',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 5 karakter',
                    'valid_email' => 'Email yang kamu masukan tidak valid'

                ],
            ],

            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 5 karakter'
                ],
            ],
        ];
        
        $validasi->setRules($aturan);
        if($validasi->withRequest($this->request)->run()) 
        {
            $id = $this->request->getPost('id');
            $namauser = $this->request->getPost('namauser');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $level = $this->request->getPost('level');

            $data = [
                'id'=>$id,
                'nama_user'=>$namauser,
                'email'=>$email,
                'password'=>$password,
                'level'=>$level
            ];

            $this->model->save($data);

            $hasil['sukses'] ='Berhasil Memasukan Data, Silahkan Tutup Kembali';
            $hasil['error'] = true;
        }
        else
        {
            $hasil['sukses'] =false;
            $hasil['error'] = $validasi->listErrors();

        }

  
      return json_encode($hasil);
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
            'subjudul'=>'Tabel User',
            'menu'=>'tabel',
            'submenu'=>'tabel user',
            'page'=>'admin/v_tb_user',
        ];
        $data['katakunci'] = $katakunci;
        $data['dataUser'] = $pencarian->orderBy('id','desc')->paginate(5);
        $data['pager'] = $this->model->pager;
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page'); 
        return view('template/v_admin',$data); 
    }
}
