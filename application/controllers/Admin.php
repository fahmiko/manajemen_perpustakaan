<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_admin');
		$this->load->model('data_pinjaman');
		$this->load->model('data_buku');
	}

	public function index()
	{
		if(empty($this->session->userdata('username'))){
			$this->load->view('admin/login');			
		}else{
		$data['session'] = array('username' => $this->session->userdata('username'),
								 'akses'   => $this->session->userdata('akses'),
								 'id_user' => $this->session->userdata('id_user')
								);
		$this->load->view('admin/header');
		$this->load->view('admin/beranda', $data, FALSE);
		$this->load->view('admin/footer');
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
			//Ambil data dari form
			$data['user'] = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);

			$data['login']   = $this->data_admin->cek_data_login($data['user']);

			if ($data['login']['row']==0) {
				redirect('admin','refresh');
			}else{
				$data['session'] = $this->session->set_userdata($data['login']['user']);
				redirect('admin', $data);
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Admin','refresh');
	}

	public function pinjaman(){
		$data['pinjaman'] = $this->data_pinjaman->get_data_pinjaman();
		$this->load->view('admin/header');
		$this->load->view('admin/pinjaman', $data, FALSE);
		$this->load->view('admin/footer');
	}

	public function buku(){
		if(empty($this->session->userdata('username'))){
			$this->load->view('admin/login');			
		}else{
			redirect('Buku/index');
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
?>