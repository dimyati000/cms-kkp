<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Klien extends CI_Controller{

    public function index(){
        $data['title'] = "Home | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "home-klien.php";    
        
        $this->load->view('halaman-klien/tema-klien.php', $data);
    }
    
    public function language(){
        $data['konten'] = "language.php";    
        
        $this->load->view('halaman-klien/tema-klien.php', $data);
    }

    public function translate($language){
        $newdata = array(
            'language' => $language
        );

        $this->session->set_userdata($newdata);

        if($this->session->userdata('language')){
            redirect($_SERVER['HTTP_REFERER']);
        }
        
    }

    

    public function about(){
        $data['title'] = "About | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "about-klien.php";    

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }
}

?>