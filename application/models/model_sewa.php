<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class 	Model_sewa extends CI_model {

	public function getUser($table_name)
	{
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}

	public function tambahData(){
		$tambah = $this
	}

	public function editData(){

	}

	public function hapusData(){

	}


}

/* End of file 	Model_crud.php */
/* Location: ./application/controllers/	Model_crud.php */