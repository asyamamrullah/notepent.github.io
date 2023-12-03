<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPentest;

class FormTambahData extends BaseController
{

    public function __construct()
    {
        $this->model = new \App\Models\ModelPentest();
    }
    
    public function simpan() 
    {
        $validasi = \config\Services::validation();
        $aturan = [
            'id_pentest' => [
                'label' => 'ID Pentest',
                'rules' => 'required|min_length[1]',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 1 karakter',
                ],
            ],
            'pemohon' => [
                'label' => 'Pemohon',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 5 karakter',
                ],
            ],
            
            'url_target' => [
                'label' => 'URL Target',
                'rules' => 'required|min_length[5]|',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 5 karakter',

                ],
            ],

            'p_jawab' => [
                'label' => 'Nama Penanggung Jawab',
                'rules' => 'required|min_length[5]|',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 5 karakter',

                ],
            ],

            'p_email' => [
                'label' => 'Email',
                'rules' => 'required|min_length[5]|valid_email',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 5 karakter',
                    'valid_email' => 'Email yang Anda masukan tidak valid'

                ],
            ],

            'p_no' => [
                'label' => 'Kontak',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 5 karakter'
                ],
            ],

            'ip_addres' => [
                'label' => 'IP Address',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 5 karakter'
                ],
            ],

            'h_high' => [
                'label' => 'Hasil High',
                'rules' => 'required|min_length[1]',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 1 karakter'
                ],
            ],
            'h_med' => [
                'label' => 'Hasil Medium',
                'rules' => 'required|min_length[1]',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 1 karakter'
                ],
            ],
            'h_low' => [
                'label' => 'Hasil Low',
                'rules' => 'required|min_length[1]',
                'errors' => [
                    'required'=>'{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk {field} adalah 1 karakter'
                ],
            ],
        ];
        
        $validasi->setRules($aturan);
        if($validasi->withRequest($this->request)->run()) 
        {
            $id = $this->request->getPost('id');
            $id_pentest = $this->request->getPost('id_pentest');
            $pemohon = $this->request->getPost('pemohon');
            $tanggal = $this->request->getPost('tanggal');
            $url_target = $this->request->getPost('url_target');
            $nama_in = $this->request->getPost('nama_in');
            $p_jawab = $this->request->getPost('p_jawab');
            $p_email = $this->request->getPost('p_email');
            $p_no = $this->request->getPost('p_no');
            $ip_addres = $this->request->getPost('ip_addres');
            $status_hg = $this->request->getPost('status_hg');
            $h_high = $this->request->getPost('h_high');
            $h_med = $this->request->getPost('h_med');
            $h_low = $this->request->getPost('h_low');
            $ket = $this->request->getPost('ket');

            $data = [
                'id'=>$id,
                'id_pentest'=>$id_pentest,
                'pemohon'=>$pemohon,
                'tanggal'=>$tanggal,
                'url_target'=>$url_target,
                'nama_in'=>$nama_in,
                'p_jawab'=>$p_jawab,
                'p_email'=>$p_email,
                'p_no'=>$p_no,
                'ip_addres'=>$ip_addres,
                'status_hg'=>$status_hg,
                'h_high'=>$h_high,
                'h_med'=>$h_med,
                'h_low'=>$h_low,
                'ket'=>$ket
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
        $data=[
            'judul'=>'Form Tambah Data',
            'subjudul'=>'Tambah Data',
            'menu'=>'form tambah data',
            'submenu'=>'tambah data',
            'page'=>'admin/v_form_tambah_data'
        ];
        return view('template/v_admin',$data); 
        
    }

}
