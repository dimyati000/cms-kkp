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
}