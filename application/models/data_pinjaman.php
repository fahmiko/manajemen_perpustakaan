<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pinjaman extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}

		public function get_data_pinjaman(){
			$this->db->select('*');
			$this->db->from('pinjaman');
			$this->db->join('member', 'pinjaman.id_member = member.id_member');
			$this->db->join('buku', 'pinjaman.id_buku = buku.id_buku');
			$query = $this->db->get();
			return $query;
		}

		public function get_pinjaman($id = 0){
		$this->db->select('*');
		$this->db->from('pinjaman');
		$this->db->join('member', 'pinjaman.id_member = member.id_member');
		$this->db->join('buku', 'pinjaman.id_buku = buku.id_buku');
		$this->db->where('status', 'dipinjam');
		$this->db->where('id_pinjaman', $id);
		// $this->db->query("select * from pinjaman 
		// 				  join member
		// 				  on pinjaman.id_member = member.id_member
		// 				  join buku
		// 				  on pinjaman.id_buku = buku.id_buku
		// 				  where status = 'dipinjam' AND id_pinjaman = $id");
		$query = $this->db->get();
		return $query;
		}
}

/* End of file data_pinjaman.php */
/* Location: ./application/models/data_pinjaman.php */