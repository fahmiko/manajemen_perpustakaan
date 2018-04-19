<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_admin extends CI_Model {

	public function cek_data_login($data){
		$query['get_user'] = $this->db->get_where('user', array(
			'username' => $data['username'],
			'password' => $data['password'])
		);
		$query['user'] = $query['get_user']->row_array();
		$query['row'] = $query['get_user']->num_rows();
		return $query;
	}

}

/* End of file data_admin.php */
/* Location: ./application/models/data_admin.php */