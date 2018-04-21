<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_buku extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}

		public function get_data_buku(){
			$this->db->select('*');
			$this->db->from('buku');
			$this->db->join('kategori', 'buku.id_kategori = kategori.id_kategori');
			$query = $this->db->get();
			return $query;
		}

		public function get_data_buku_by_id($id){
			$query = $this->db->get_where('buku', array('id_buku' => $id));
			return $query->row_array();
		}

		public function set_data_buku($data, $id = 0){
			if ($id == 0) {
				return $this->db->insert('buku', $data);
			}else{
				$this->db->where('id_buku',$id);
     			return $this->db->update('buku', $data);
			}
		}
		public function delete_data_buku($id){
			$this->db->where('id_buku', $id);
			return $this->db->delete('buku');
		}
}

/* End of file data_buku.php */
/* Location: ./application/models/data_buku.php */