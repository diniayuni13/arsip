<?php
	class MLogin extends CI_Model{
		function __construct(){
		parent::__construct();
		}

		function GoLogin($id_login,$username,$password){
			$this->db->select('*');
			$this->db->from('login');
			$this->db->where('id_login', $id_login);
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get();
			if($query -> num_rows() == 1){
				$row = $query->row(); 
    			return $row->id_login;
			}else{
				return false;
			}
		}

	}
?>