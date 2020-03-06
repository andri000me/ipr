<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->Model_security->getsecurity();
		$isi['content'] 	= 'tampilan_content';
		$isi['judul']		= 'Home';
		$isi['subjudul']	= ''; 
		$this->load->view('index',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}