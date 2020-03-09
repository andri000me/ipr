<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	

	function index(){
		date_default_timezone_set('Asia/Bangkok');
        $a['buku_tamu']	= $this->model_admin->tampil_buku_tamu()->num_rows();
        $a['tamu_masuk']	= $this->model_admin->tampil_buku_tamu()->num_rows();
        $a['cari_tamu']	= $this->model_admin->tampil_buku_tamu()->num_rows();
		$a['page']	= "home";
		
		$this->load->view('admin/index', $a);
	}
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('model_admin');
		$this->load->library('session');
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
	}



/*============================================ Fungsi Buku Tamu ===============================================*/

	function buku_tamu(){
		$a['data']	= $this->model_admin->tampil_buku_tamu()->result_object();
		$a['page']	= "buku_tamu";
		
		$this->load->view('admin/index', $a);
	}
	function tamu_masuk(){
		
		$a['data']	= $this->model_admin->tampil_buku_tamu()->result_object();
		$a['page']	= "tamu_masuk";
		
		$this->load->view('admin/index', $a);
	}
	function tamu_keluar(){
		$a['data']	= $this->model_admin->tampil_buku_tamu()->result_object();
		$a['page']	= "tamu_keluar";
		
		$this->load->view('admin/index', $a);
	}
	function cari_tamu(){
		$a['data']	= $this->model_admin->tampil_buku_tamu()->result_object();
		$a['page']	= "cari_tamu";
		
		$this->load->view('admin/index', $a);
	}
	/*======= Fungsi Tambah Buku Tamu =======*/
	function tambah_buku_tamu(){
		$a['data']	= $this->model_admin->tampil_pertanyaan()->result_object();
		$a['page']	= "tambah_buku_tamu";
		$this->load->view('admin/index', $a);
	}

	/*======= Fungsi Insert Buku Tamu =======*/
	function insert_buku_tamu(){
		date_default_timezone_set('Asia/Jakarta');
		$no_buku_tamu = $this->input->post('no_buku_tamu');
		$nama = $this->input->post('nama');
		$asal_perusahaan = $this->input->post('asal_perusahaan');
		$tujuan = $this->input->post('tujuan');
		$bertemu = $this->input->post('bertemu');
		$jam_masuk = date("Y-m-d H:i:s");
		$nomor_kartu = $this->input->post('nomor_kartu');
		$suhu_tubuh = $this->input->post('suhu_tubuh');
		
		$object = array(
						'nama' => $nama,
						'asal_perusahaan' => $asal_perusahaan,
						'tujuan' => $tujuan,
						'bertemu' => $bertemu,
						'jam_masuk' => $jam_masuk,
						'nomor_kartu' => $nomor_kartu,
						'suhu_tubuh' => $suhu_tubuh,
						);

		$this->db->insert('tb_buku_tamu', $object);

		#UNIQUE ID TABLE PARENT 1
		$uniqueFirstTb = $this->db->insert_id();
		$no_buku_tamu = $this->input->post('no_buku_tamu');
		$uniquePertanyaan = $this->db->insert_id();
		$id_pertanyaan = $this->input->post('id_pertanyaan');
		$jawaban = $this->input->post('jawaban');
		$keterangan = $this->input->post('keterangan');

		foreach ($jawaban as $keyJawaban => $valJawaban)
		{
			$detail = array(
				'no_buku_tamu' => $uniqueFirstTb,
				'id_pertanyaan' => $uniquePertanyaan,
				'jawaban' => $valJawaban,
				'keterangan' => $keterangan[$keyJawaban] == null ? '-' : $keterangan[$keyJawaban],
			);
			$this->db->insert('tb_buku_tamu_detail', $detail);	
		}
		
		redirect('admin/buku_tamu','refresh');
	}

	/*======= Fungsi Edit Buku Tamu =======*/
	function edit_buku_tamu($id){
		$a['editdata']	= $this->db->get_where('tb_buku_tamu',array('no_buku_tamu'=>$id))->result_object();		
		$a['page']	= "edit_buku_tamu";
		
		$this->load->view('admin/index', $a);
	}

	/*======= Fungsi Update Buku Tamu =======*/
	function update_buku_tamu(){
		date_default_timezone_set('Asia/Jakarta');	
		$no_buku_tamu = $this->input->post('no_buku_tamu');
		$nama = $this->input->post('nama');
		$asal_perusahaan = $this->input->post('asal_perusahaan');
		$tujuan = $this->input->post('tujuan');
		$bertemu = $this->input->post('bertemu');
		$jam_keluar = date("Y-m-d H:i:s");
		$nomor_kartu = $this->input->post('nomor_kartu');
		$object = array(
					'nama' => $nama,
					'asal_perusahaan' => $asal_perusahaan,
					'tujuan' => $tujuan,
					'bertemu' => $bertemu,
					'jam_keluar' => $jam_keluar,
					'nomor_kartu' => $nomor_kartu,
					);
				$this->db->where('no_buku_tamu', $no_buku_tamu);
				$this->db->update('tb_buku_tamu', $object); 
		redirect('admin/buku_tamu','refresh');
		
		
	}
	/*======= Fungsi Hapus Buku Tamu =======*/
	function hapus_buku_tamu($id){
		$this->model_admin->hapus_buku_tamu($id);
		redirect('admin/buku_tamu');
	}

}
