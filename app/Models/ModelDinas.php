<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDinas extends Model
{
   protected $table="tb_dinas";
   protected $primarykey="id_dinas";
   protected $allowedFields ="nm_dinas";

   public function cari($katakunci)
   {
      $builder = $this->table("tabeldatainstansi");
      $arr_katakunci = explode(" ",$katakunci);
      for ($x=0;$x<count($arr_katakunci); $x++) {
        $builder->orLike('id_dinas',$arr_katakunci[$x]);
        $builder->orLike('nm_dinas',$arr_katakunci[$x]);
      }
      return $builder;

   }

}
 