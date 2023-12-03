<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTable extends Model
{
    protected $table="pentest";
    protected $primarykey="id";
    protected $allowedFields=
    [
        'pemohon',
        'tanggal',
        'url_target',
        'nama_in',
        'p_jawab',
        'p_email',
        'p_no',
        'ip_addres',
        'status_hg',
        'h_high',
        'h_med',
        'h_low',
        'ket'
    ];
}