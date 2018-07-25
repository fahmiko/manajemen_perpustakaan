<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_member extends CI_Model {
	public function cek_login($data){
		$this->db->select('id_member, usr_member, nama, type');

		if($this->db->get_where('member',$data['login'])->num_rows() == 0){
			$this->session->set_flashdata('msg','Gagal Login, Cek username dan password');
			redirect('members/login','refresh');
		}else{
			$this->session->set_userdata($this->db->get_where('member',$data['login'])->row_array());
			redirect('members','refresh');
		}
	}

	public function cek_member($id_member = 0){
		$this->db->select('*');
		$this->db->where('id_member', $id_member);
		$this->db->where('status', 'dipinjam');
		return $this->db->get('pinjaman')->num_rows();
	}

	public function cek_tipe_member($id_member = 0){
		$this->db->select('*');
		$this->db->where('id_member', $id_member);
		foreach ($this->db->get('member')->result() as $row) {
			return $row->type;
		}
	}

	public function get_total($type){
		$this->db->select('*');
		$this->db->where('type', $type);
		return $this->db->get('member');
	}
}

/* End of file data_member.php */
/* Location: ./application/models/data_member.php */