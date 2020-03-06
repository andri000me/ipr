<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('user_model');
 }

/*======= Fungsi Index =======*/
public function index() {
 $data = array( 'title' => 'Index',
 'user' => $this->user_model->listing());
 $this->load->view('excel',$data);
 }

/*======= Fungsi Export Excel Surat Keluar=======*/
public function export_excel()
{
 // $data = array( 'title' => 'Laporan Excel Surat Keluar',
 // 'user' => $this->user_model->listing());
	$data['user'] = $this->user_model->listing();
	// echo '<pre>';
 // 	var_dump($d);die();
 // 	echo '</pre>';
 $this->load->view('laporan_excel',$data);
 }

/*======= Fungsi Export Excel Surat Masuk=======*/
public function export_excelsuratmasuk()
{
 // $data = array( 'title' => 'Laporan Excel Surat Masuk',
 // 'user' => $this->user_model->listing());
	$data['user'] = $this->user_model_masuk->listing();
	// echo '<pre>';
 // 	var_dump($d);die();
 // 	echo '</pre>';
 $this->load->view('laporan_suratmasuk',$data);
 }

}
 
/* End of file Excel.php */
/* Location: ./application/controllers/Excel.php */