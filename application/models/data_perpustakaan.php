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

	public function get_data_sort($table, $column){
		$query = $this->db->select('*')
				 		  ->from($table)
				 		  ->order_by($column, 'asc')
				 		  ->get();
		return $query;
	}
	
	public function generate_dropdown($table, $column_id, $column_name){
		$data = $this->db->select('*')->from($table)->get();
		$data_select[''] = "Select One";
		foreach ($data->result_array() as $row) {
			$data_select[$row[$column_id]] = $row[$column_name];
		}
		return $data_select;
	}

	public function get_data_pagination($table, $limit, $offset){
		$query = $this->db->select("*")
				->from($table)
				->limit($limit, $offset)
				->get();
		return $query;
	}
	
	public function get_total($table){
		return $this->db->count_all($table);
	}
}

/* End of file data_perpustakaan.php */
/* Location: ./application/models/data_perpustakaan.php */