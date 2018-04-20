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
}

/* End of file data_pinjaman.php */
/* Location: ./application/models/data_pinjaman.php */