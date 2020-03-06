<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	/*======= Fungsi Tampil Buku Tamu =======*/
	/*public function tampil_buku_tamu()
	{
		return $this->db->query("
			select * from tb_buku_tamu order by no_buku_tamu desc			
			");
	}*/

	public function tampil_buku_tamu(){
		return $this->db->query("SELECT tb_buku_tamu.nama, tb_buku_tamu.asal_perusahaan, tb_buku_tamu.tujuan, tb_buku_tamu.bertemu, tb_buku_tamu.jam_masuk, tb_buku_tamu.jam_keluar, tb_buku_tamu.nomor_kartu, tb_buku_tamu_detail.id_pertanyaan, tb_buku_tamu_detail.jawaban, tb_buku_tamu_detail.suhu_tubuh FROM tb_buku_tamu INNER JOIN tb_buku_tamu_detail ON tb_buku_tamu.no_buku_tamu = tb_buku_tamu_detail.no_buku_tamu");
	}

	/*public function tampil_buku_tamu(){
		return $this->db->query("SELECT tb_buku_tamu.no_buku_tamu, tb_buku_tamu.nama, tb_buku_tamu.asal_perusahaan, tb_buku_tamu.tujuan, tb_buku_tamu.bertemu, tb_buku_tamu.jam_masuk, tb_buku_tamu.jam_keluar, tb_buku_tamu.nomor_kartu, tb_pertanyaan.pertanyaan, tb_buku_tamu_detail.jawaban FROM tb_buku_tamu LEFT JOIN tb_buku_tamu_detail ON tb_buku_tamu_detail.no_buku_tamu = tb_buku_tamu.no_buku_tamu LEFT JOIN tb_pertanyaan ON tb_buku_tamu_detail.id_pertanyaan = tb_pertanyaan.id_pertanyaan");
	}
*/

	public function tampil_pertanyaan(){
		return $this->db->query("
			select * from tb_pertanyaan order by id_pertanyaan desc			
			"); 
	}


	/*======= Fungsi Hapus Buku Tamu =======*/
	public function hapus_buku_tamu($id)
	{	
		return $this->db->delete('tb_buku_tamu', array('no_buku_tamu' => $id));
	}

	
	/*======= Fungsi Tampil Arsip =======*/
	public function tampil_arsip()
	{
		return $this->db->query("
			select * from tb_arsip order by no_form desc

			
			");
	}
	/*======= Fungsi Hapus Arsip =======*/
	public function hapus_arsip($id)
	{	
		return $this->db->delete('tb_arsip', array('no_form' => $id));
	}

	/*======= Fungsi Tampil Surat Kendaraan =======*/
	public function tampil_surat_kendaraan()
	{
		return $this->db->query("
			select * from tb_surat_kendaraan order by tanggal desc

			
			");
	}
	/*======= Fungsi Hapus Surat Kendaraan =======*/
	public function hapus_surat_kendaraan($id)
	{	
		return $this->db->delete('tb_surat_kendaraan', array('surat_id' => $id));
	}
}
