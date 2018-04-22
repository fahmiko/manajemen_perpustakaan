<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_perpustakaan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_data($table){
		return $this->db->get($table);
	}

	public function get_data_by_id($table, $column, $id){
		$query = $this->db->get_where($table,array($column => $id));
		return $query->row_array();
	}

	public function set_data($table, $column, $data, $id = 0){
		if ($id == 0) {
			return $this->db->insert($table, $data);
		}else{
			$this->db->where($column, $id);
     		return $this->db->update($table, $data);
		}
	}

	public function delete_data($table, $column, $id){
		$this->db->where($column, $id);
		return $this->db->delete($table);
	}

	public function get_data_join($table1, $table2, $column){
			$this->db->select('*');
			$this->db->from($table1);
			$this->db->join($table2, $table1.'.'.$column.' = '.$table2.'.'.$column);
			$query = $this->db->get();
			return $query;
	}
}

/* End of file data_perpustakaan.php */
/* Location: ./application/models/data_perpustakaan.php */