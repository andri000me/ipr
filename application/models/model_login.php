<?php
class model_login extends CI_Model{
	//cek username dan password admin
	function auth_admin($username,$password){
		$val_pass=md5($password);
		$query=$this->db->query("SELECT * FROM tb_admin WHERE username='$username' AND password='$val_pass' LIMIT 1");
		return $query;
	}

//cek nim dan password user
	function auth_user($username,$password){
		$val_pass=md5($password);
		$query=$this->db->query("SELECT * FROM tb_user WHERE username='$username' AND password='$val_pass' LIMIT 1");
		return $query;
	}
}
