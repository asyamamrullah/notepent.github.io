<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function save_register($data)
    {
       $this->db->table('tb_user')->insert($data);
       
    }

    public function login($nama_user, $password)
    {
        return $this->db->table('tb_user')->where([
            'nama_user'=> $nama_user,
            'password' => $password,
        ])->get()->getRowArray();
    }

}