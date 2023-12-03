<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInstansi extends Model
{
   protected $table = 'tb_dinas';

   public function cari($katakunci)
    {
       $builder = $this->table("tabelpentest");
       $arr_katakunci = explode(" ",$katakunci);
       for ($x=0;$x<count($arr_katakunci); $x++) {

         $builder->orLike('id_dinas',$arr_katakunci[$x]);
         $builder->orLike('nm_dinas',$arr_katakunci[$x]);
       }
       return $builder;

    }

}
