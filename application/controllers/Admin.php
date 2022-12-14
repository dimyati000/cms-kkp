<?php

class Admin extends CI_Controller{

    public function index(){
        $data['config'] = $this->config->baca()->result(); 
        $data['konten'] = "beranda.php";
        $this->parser->parse('tema-admin', $data);
    }
}
    
?>