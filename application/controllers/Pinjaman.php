<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_admin');
		$this->load->model('data_pinjaman');
		$this->load->model('data_perpustakaan');
	}
	
	public function index()
	{
		$data['pinjaman'] = $this->data_pinjaman->get_data_pinjaman();
		$this->load->view('templates/header');
		$this->load->view('admin/pinjaman', $data, FALSE);
		$this->load->view('templates/footer');
	}

}

/* End of file Pinjaman.php */
/* Location: ./application/controllers/Pinjaman.php */