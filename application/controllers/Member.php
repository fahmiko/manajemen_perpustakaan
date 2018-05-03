<?php
class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_perpustakaan');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		if(empty($this->session->userdata('username'))){
			$this->load->view('admin/login');			
		}
	}

	public function index()
	{
		$data['member'] = $this->data_perpustakaan->get_data('member');
		$this->load->view('templates/header');
		$this->load->view('admin/member', $data, FALSE);
		$this->load->view('templates/footer');
	}

	public function tambah_member(){
		$data['member'] = $this->data_perpustakaan->get_data('member');
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[5]|is_unique[member.nama]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('admin/member',$data);
			$this->load->view('templates/footer');
		} else {
			$data['input'] = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'instansi' => $this->input->post('instansi')
			);
			$this->data_perpustakaan->set_data('member','',$data['input'],0);
			redirect('Member','refresh');
		}
	}

	public function edit_member(){
		$id = $this->uri->segment(3);
		$data['member'] = $this->data_perpustakaan->get_data_by_id('member', 'id_member', $id);
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[5]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[5]');
		$this->form_validation->set_rules('instansi', 'Instansi', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('admin/edit_member', $data);
			$this->load->view('templates/footer');
		} else {
			$data['input'] = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'instansi' => $this->input->post('instansi')
			);
			$this->data_perpustakaan->set_data('member','id_member',$data['input'], $id);
			redirect('member','refresh');
		}
	}

	public function delete_member(){
		$id = $this->uri->segment(3);
		$this->data_perpustakaan->delete_data('member', 'id_member', $id);
		redirect('Member','refresh');
	}

}