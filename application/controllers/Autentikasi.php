<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Autentikasi extends CI_Controller {     

  public function __construct()
  {
    parent::__construct();
    // $this->apl = get_apl();
    // $this->load->model('Utama_m');
		$this->load->model('Autentikasi_m');
  }
  
  public function index()
	{
		$this->load->view('autentikasi/login');
  }
  
  public function register()
	{
		$this->load->view('autentikasi/register');
  }
}