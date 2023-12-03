<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
   protected $table = 'tb_user';
   protected $primarykey ='id';
   protected $allowedFields = ['nama_user', 'email', 'password', 'level'];

   public function cari($katakunci)
    {
       $builder = $this->table("tabeluser");
       $arr_katakunci = explode(" ",$katakunci);
       for ($x=0;$x<count($arr_katakunci); $x++) {
        
         $builder->orLike('nama_user',$arr_katakunci[$x]);
         $builder->orLike('email',$arr_katakunci[$x]);
       }
       return $builder;

    }

}
