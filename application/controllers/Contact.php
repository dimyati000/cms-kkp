<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller{

    public function index(){
        $data['title'] = "Contact | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "contact/contact.php";    

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }
}

?>