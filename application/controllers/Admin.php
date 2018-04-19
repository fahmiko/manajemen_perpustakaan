<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_admin');
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
		$this->load->view('admin/header', $data);
		$this->load->view('admin/beranda', $data, FALSE);
		$this->load->view('admin/footer');
		}
	}

	public function cek_login(){
		//Untuk validasi username dan password
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]');

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
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>