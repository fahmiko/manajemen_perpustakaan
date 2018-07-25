<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('data_pinjaman','data_perpustakaan','data_member'));
	}
	public function index()
	{
		$data['pinjaman'] = $this->data_pinjaman->get_data_pinjaman();
		$data['member'] = $this->data_pinjaman->get_popular_member();
		$data['buku'] = $this->data_pinjaman->get_popular_book();
		$data['total_member'] = $this->data_perpustakaan->get_data('member')->num_rows();
		$data['total_buku'] = $this->data_perpustakaan->get_data('buku')->num_rows();
		$data['total_gold'] = $this->data_member->get_total('gold')->num_rows();
		$data['total_silver'] = $this->data_member->get_total('silver')->num_rows();
		$data['total_pinjaman'] = $this->data_perpustakaan->get_data('pinjaman')->num_rows();
		$data['total_kategori'] = $this->data_perpustakaan->get_data('kategori')->num_rows();
		$this->load->view('owner/header');
		$this->load->view('owner/dashboard', $data);
		$this->load->view('owner/footer');
	}

}

/* End of file Owner.php */
/* Location: ./application/controllers/Owner.php */
?>