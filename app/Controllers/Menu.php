<?php

namespace App\Controllers;


class Menu extends BaseController
{
  

    public function Menu_Admin()
    {
        if (session()->get('level') <> 2) {
          return redirect()->to(base_url('web'));
        }

      $data = array(
        'title' => 'Menu Admin',
        'isi' => 'v_menu'
          
     );
      return view('v_template', $data);
    }
    public function Menu_User()
    {
      if (session()->get('level') <> 2) {
        return redirect()->to(base_url('web'));
      }
      $data = array(
        'title' => 'Menu User',
        'isi' => 'v_menu'
          
     );
      return view('v_template', $data);
}
    public function Menu_Guest()
    {
      if (session()->get('level') <> 2) {
        return redirect()->to(base_url('web'));
      }
      $data = array(
        'title' => 'Menu Guest',
        'isi' => 'v_menu'
          
     );
      return view('v_template', $data);

}
}