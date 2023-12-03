<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFile extends Model
{
   protected $table="tb_file";
   protected $primarykey="id_file";
   protected $allowedFields =
   [
       'no_file',
       'nama_file',
       'deskripsi',
       'tgl_upload',
       'tgl_update',
       'file_pdf',
       'id_dinas',
       'id_user'
   ];
   
   public function alldata()
   {
      $ $this->db->table();

   }

   public function cari($katakunci)
    {
       $builder = $this->table("tabelpentest");
       $arr_katakunci = explode(" ",$katakunci);
       for ($x=0;$x<count($arr_katakunci); $x++) {
         $builder->orLike('id_pentest',$arr_katakunci[$x]);
         $builder->orLike('pemohon',$arr_katakunci[$x]);
         $builder->orLike('tanggal',$arr_katakunci[$x]);
         $builder->orLike('url_target',$arr_katakunci[$x]);
         $builder->orLike('nama_in',$arr_katakunci[$x]);
         $builder->orLike('p_jawab',$arr_katakunci[$x]);
         $builder->orLike('p_email',$arr_katakunci[$x]);
         $builder->orLike('p_no',$arr_katakunci[$x]);
         $builder->orLike('ip_addres',$arr_katakunci[$x]);
         $builder->orLike('status_hg',$arr_katakunci[$x]);
         $builder->orLike('h_high',$arr_katakunci[$x]);
         $builder->orLike('h_med',$arr_katakunci[$x]);
         $builder->orLike('h_low',$arr_katakunci[$x]);
         $builder->orLike('ket',$arr_katakunci[$x]);
       }
       return $builder;

    }

}
