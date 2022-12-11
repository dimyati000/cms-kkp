<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jasa extends CI_Controller{

    public function perpajakan(){
        $data['title'] = "Jasa Perpajakan | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "layanan-klien/jasa-perpajakan.php";

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }

    public function akuntansi(){
        $data['title'] = "Jasa Akuntansi | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "layanan-klien/jasa-akuntansi.php";    

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }

    public function hukum(){
        $data['title'] = "Jasa Hukum | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "layanan-klien/jasa-hukum.php";

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }

    public function form_konsultasi(){
        $data['title'] = "Form Konsultasi | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "layanan-klien/form-konsultasi.php";

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }
}

?>