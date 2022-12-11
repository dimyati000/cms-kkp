<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Autentikasi extends CI_Controller {     
  
  public function index()
	{
		$this->load->view('autentikasi/login');
  }
  
  public function register()
	{
		$this->load->view('autentikasi/register');
  }

  public function login()
	{
    $this->form_validation->set_rules('username', 'username', 'trim|required');
      $this->form_validation->set_rules('password', 'password', 'trim|required');
		// $this->load->view('autentikasi/login');
  }
}