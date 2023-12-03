<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MenuReportUser extends BaseController
{
    public function index()
    {
        $data=[
            'judul'=>'Report',
            'subjudul'=>'Menu Report User',
            'menu'=>'report',
            'submenu'=>'menu report user',
            'page'=>'admin/v_report_user'
        ];
        return view('template/v_admin',$data); 
    }
}
