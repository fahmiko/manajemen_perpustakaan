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
		if ($this->input->post('sorting') != null) {
			$data['buku'] = $this->data_perpustakaan->get_data_sort('buku', $this->input->post('sorting'));
		}else{
			$data['buku'] = $this->data_perpustakaan->get_data('buku');
		}
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
