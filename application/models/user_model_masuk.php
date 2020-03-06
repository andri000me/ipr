<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model_masuk extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 //$this->db->select('*');
 //$this->db->from('tb_surat_keluar');
 $query = $this->db->query("
 	SELECT a.* 
  	 FROM tb_surat_masuk a");
 return $query->result();
 }

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */