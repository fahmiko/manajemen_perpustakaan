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
			$query = $this->db->get();
			return $query;
		}

		public function get_pinjaman_by_id($id = 0){
			$this->db->select('*');
			$this->db->from('pinjaman');
			$this->db->join('member', 'pinjaman.id_member = member.id_member');
			$this->db->join('buku', 'pinjaman.id_buku = buku.id_buku');
			$this->db->where('id_pinjaman', $id);
			$query = $this->db->get();
			return $query;
		}

		public function get_pinjaman_by_member($id = 0){
			$this->db->select('*');
			$this->db->from('pinjaman');
			$this->db->join('buku', 'pinjaman.id_buku = buku.id_buku');
			$this->db->where('id_member', $id);
			$query = $this->db->get();
			return $query;
		}

		public function get_popular_book(){
			//Query untuk Menampilkan rank buku yang banyak dipinjam
			$this->db->select(array('buku.*',"count(pinjaman.id_buku) as total"));
			$this->db->from('pinjaman');
			$this->db->join('buku', 'pinjaman.id_buku = buku.id_buku');
			$this->db->group_by('id_buku');
			$this->db->order_by('total', 'desc');
			$this->db->limit(8);
			$query = $this->db->get();
			return $query;
		}
		public function get_popular_member(){
			//Query untuk Menampilkan rank user yang sering pinjam
			$this->db->select(array('member.*',"count(pinjaman.id_member) as total"));
			$this->db->from('pinjaman');
			$this->db->join('member', 'pinjaman.id_member = member.id_member');
			$this->db->group_by('id_member');
			$this->db->order_by('total', 'desc');
			$query = $this->db->get();
			return $query;
		}
}

/* End of file data_pinjaman.php */
/* Location: ./application/models/data_pinjaman.php */