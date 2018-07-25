<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_admin');
		$this->load->model('data_pinjaman');
		$this->load->model('data_perpustakaan');
	}

	public function index()
	{
		if(empty($this->session->userdata('username'))){
			$this->load->view('admin/login');			
		}else{
			$data['member'] = $this->data_perpustakaan->get_data('member');
			$data['buku']   = $this->data_perpustakaan->get_data('buku');
			$data['pinjaman'] = $this->data_perpustakaan->get_data('pinjaman');
			$data['kategori'] = $this->data_perpustakaan->get_data('kategori');
			$this->load->view('templates/header');
			$this->load->view('admin/beranda', $data, FALSE);
			$this->load->view('templates/footer');
		}
	}

	public function cek_login(){
		//Untuk validasi username dan password
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]',
				array(
					'required' => "Username tidak boleh kosong"
				));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]',
				array(
					'required' => "Password tidak boleh kosong"
				));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/login');
		} else {
			$data['login'] = $this->data_admin->cek_data_login();
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin','refresh');
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
?>