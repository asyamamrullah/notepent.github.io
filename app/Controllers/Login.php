<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
  
    public function index()
    {
      $data = array(
        'title' => 'Login',
      );
      return view('v_login', $data);
    }
}