<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() //Function yang akan dijalankan terlebih dahulu
	{
		parent::__construct();
		//$this->load->library('session');
		$this->load->model('model_login');
	}

	public function index()
	{
		$this->load->view('admin/tampilan_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->model_login->auth_admin($username,$password);
        if($cek_admin->num_rows() > 0){ //jika login sebagai admin
					$data=$cek_admin->row_array();
        			$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['username']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('admin');

		         }else{ //akses admin
		            $this->session->set_userdata('akses','2');
		            $this->session->set_userdata('ses_id',$data['username']);
       				$this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('admin');
		         }

        }else{ //jika login sebagai user
					$cek_user=$this->model_login->auth_user($username,$password);
				if($cek_user->num_rows() > 0){
					$data=$cek_user->row_array();
        			$this->session->set_userdata('masuk',TRUE);
					$this->session->set_userdata('akses','3');
					$this->session->set_userdata('ses_id',$data['username']);
					$this->session->set_userdata('ses_nama',$data['nama']);
					redirect('admin');
				
				}else{  // jika username dan password tidak ditemukan atau salah
					$url=base_url();
					echo $this->session->set_flashdata('msg','Username Atau Password Salah');
					redirect('login');
					}
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect('login');
    }


}


