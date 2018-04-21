<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kategori extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}

	public function get_data_kategori(){
		return $this->db->get('kategori');
	}

	public function get_data_kategori_by_id($id){
		$query = $this->db->get_where('kategori', array('id_kategori' => $id));
		return $query->row_array();
	}

	public function set_data_kategori($data, $id = 0){
		if ($id == 0) {
			return $this->db->insert('kategori', $data);
		}else{
			$this->db->where('id_kategori',$id);
     		return $this->db->update('kategori', $data);
		}
	}
	public function delete_data_kategori($id){
		$this->db->where('id_kategori', $id);
		return $this->db->delete('kategori');
	}
}

/* End of file data_kategori.php */
/* Location: ./application/models/data_kategori.php */