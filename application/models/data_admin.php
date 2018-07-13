<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_admin extends CI_Model {

	public function cek_data_login(){
		$query = $this->db->get_where('user', array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')))
		);
		if($query->num_rows()== 0){
			$this->session->set_flashdata('msg','Cek Kembali username dan password');
			redirect('admin/cek_login','refresh');
		}else{
			$this->session->set_userdata($query->row_array());
			redirect('admin','refresh');
		}
	}

}

/* End of file data_admin.php */
/* Location: ./application/models/data_admin.php */