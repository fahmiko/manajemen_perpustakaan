<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_pinjaman');
		$this->load->model('data_perpustakaan');
		$this->load->helper('konfigurasi');
		$this->load->library('pagination');
	}

	public function index()
	{
		$data['buku'] = $this->data_pinjaman->get_popular_book();
		$this->load->view('users/header');
		$this->load->view('welcome_message', $data);
		$this->load->view('users/footer');
	}

	public function details(){
		$id = $this->uri->segment(3);
		$data['buku'] = $this->data_perpustakaan->get_data_by_id('buku', 'id_buku', $id);
		$this->load->view('users/header');
		$this->load->view('users/single_book', $data);
		$this->load->view('users/footer');
	}

	public function books()
	{
		$limit_per_page = 4;
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;
		$total_records = $this->data_perpustakaan->get_total('buku');
		$data["buku"] = $this->data_perpustakaan->get_data_pagination('buku' , $limit_per_page, $start_index);
		
		$config = paging_config('welcome/books/',$total_records,$limit_per_page);
		$this->pagination->initialize($config);
			
		// Buat link pagination
		$data["pagination"] = $this->pagination->create_links();
		$this->load->view('users/header');
		$this->load->view('users/buku', $data);
		$this->load->view('users/footer');
	}
	public function loan()
	{
		$this->load->view('loan');
	}
	public function help()
	{
		$this->load->view('help');
	}
	public function login()
	{
		$this->load->view('admin/login');
	}
}
