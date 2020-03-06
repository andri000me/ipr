<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_bukutamu extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function tampil_buku_tamu()
	{
		return $this->db->query("
			select * from tb_buku_tamu order by no_buku_tamu desc			
			");
	}

}

/* End of file User.php */
/* Location: ./application/models/User.php */