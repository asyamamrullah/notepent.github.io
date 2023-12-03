<?php

namespace App\Controllers;
use App\Models\ModelAuth;

class Auth extends BaseController
{
  public $ModelAuth;
  public function __construct()
  {
      helper('form');
      $this->ModelAuth = new ModelAuth();
  }

  public function register()
  {
    $data = array(
      'title' => 'Register',
    );
    return view('v_register', $data);
  }

  public function save_register()
  {
    if ($this->validate([
      'nama_user' =>[
          'label' => 'Nama User',
          'rules' => 'required',
          'errors' => [
            'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!'
          ]
          ],
          'email'=>[
            'label' => 'E-mail',
            'rules' => 'required',
            'errors' => [
              'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!'
            ]
            ],
            'password'=>[
              'label' => 'Password',
              'rules' => 'required',
              'errors' => [
                'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!'
              ]
              ],
              'repassword'=>[
                'label' => 'Retype Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                  'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!',
                  'matches'  => '{field} Tidak Sama!!'
              ]  
              ]
  
    ] )){
      //jika valid
      $data = array(
        'nama_user' => $this->request->getPost('nama_user'),
        'email'=> $this->request->getPost('email'),
        'password'=> $this->request->getPost('password'),
        'level' => 2
      );
      $this->ModelAuth->save_register($data);
      session()->setFlashdata('pesan','Register Berhasil !!');
      return redirect()->to(base_url('Auth/register'));

    } else {
      //jika tidak valid
        session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
        return redirect()->to(base_url('Auth/register'));
    }
    

    }
    public function login()
  {
    $data = array(
      'title' => 'login',
    );
    return view('v_login', $data);
  }

  public function cek_login()
  {
     if($this->validate([
      'nama_user' =>[
        'label' => 'Username',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!'
        ]
        ],
        'password'=>[
          'label' => 'Password',
          'rules' => 'required',
          'errors' => [
            'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!'
             ]
          ],

     ])) {
          //jika valid
          $nama_user = $this->request->getPost('nama_user');
          $password = $this->request->getPost('password');
          $cek = $this->ModelAuth->login($nama_user, $password);
          if($cek){
            //jika datanya cocok
            session()->set('log', true);
            session()->set('nama_user', $cek['nama_user']);
            session()->set('email', $cek['email']);
            session()->set('level', $cek['level']);
            //login

            redirect()->to(base_url('admin'));

          } else {
            //jika datany tidak cocok
            session()->setFlashdata('pesan', 'Login Gagal !!, Username Atau Password Tidak Cocok !!');
            return redirect()->to(base_url('auth/login'));

          }
        } else {
          //jika tidak valid
          session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
        
      }

      public function logout()
      {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Logout Sukses !!');
            return redirect()->to(base_url('auth/login'));
      }

     
     
  }
  
