<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Capture extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('admin/buku_tamu');
	}

	public function save()
	{
		$tanggal = $this->input->post('tanggal');
		$asal_perusahaan = $this->input->post('asal_perusahaan');
		$keperluan = $this->input->post('keperluan');
		$bertemu = $this->input->post('bertemu');
		$jam_masuk = $this->input->post('jam_masuk');
		$jam_keluar = $this->input->post('jam_keluar');
		$image = $this->input->post('image');
		$image = str_replace('data:image/jpeg;base64,','', $image);
		$image = base64_decode($image);
		$filename = 'image_'.time().'.png';
		file_put_contents(FCPATH.'/uploads/'.$filename,$image);
		$data = array(
			'tanggal' => $tanggal,
			'asal_perusahaan' => $asal_perusahaan,
			'keperluan' => $keperluan,
			'bertemu' => $bertemu,
			'jam_masuk' => $jam_masuk,
			'jam_keluar' => $jam_keluar,
			'image' => $filename,
		);

		$this->load->model('model_bukutamu');
		$res = $this->model_bukutamu->insert($data);
		echo json_encode($res);
	}

}

/* End of file Capture.php */
/* Location: ./application/controllers/Capture.php */