<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller{

    public function index(){
        $data['title'] = "Blog | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "blog-klien/blog.php";    

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }

    public function detail_blog(){
        $data['title'] = "Blog | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "blog-klien/detail-blog.php";    

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }

    public function detail_blog2(){
        $data['title'] = "Blog | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "blog-klien/detail-blog2.php";    

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }

    public function detail_blog3(){
        $data['title'] = "Blog | Kantor Konsultan Pajak dan Hukum";
        $data['konten'] = "blog-klien/detail-blog3.php";    

        $this->load->view('halaman-klien/tema-klien.php', $data);
    }
}

?>