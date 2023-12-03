<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPdf extends Model
{
    protected $table = 'tb_file';
    protected $primarykey = 'id';
    protected $allowedFields = ['nama_file', 'file_pdf', 'tgl_upload'];
}