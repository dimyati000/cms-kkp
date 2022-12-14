<?php

class Master extends CI_Controller{

  private $nama_menu  = "Master Configuration";     

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Config_m');
  }

    public function config(){
        $data['konfigurasi'] = $this->Config_m->baca_data()->result(); 
        $data['konten'] = "master/config.php";
        $this->parser->parse('tema-admin', $data);
    }
}
    
?>