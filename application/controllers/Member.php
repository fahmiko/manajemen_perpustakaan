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
			redirect('admin','refresh');			
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
		$this->form_validation->set_rules('usr_member', 'Username', 'required|min_length[5]|is_unique[member.usr_member]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('admin/member',$data);
			$this->load->view('templates/footer');
		} else {
			$data['input'] = array(
				'nama' => $this->input->post('nama'),
				'usr_member' => $this->input->post('usr_member'),
				'password' =>$this->input->post('password'),
				'alamat' => $this->input->post('alamat'),
				'instansi' => $this->input->post('instansi'),
				'type' => $this->input->post('type')
			);
			$this->data_perpustakaan->set_data('member','',$data['input'],0);
			redirect('Member','refresh');
		}
	}

	public function edit_member(){
		if($this->session->userdata('level') != 0){
			$this->session->set_flashdata('msg','Operator/Owner tidak dapat edit member');
			redirect('member','refresh');
		}
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
				'instansi' => $this->input->post('instansi'),
				'type' => $this->input->post('type')
			);
			$this->data_perpustakaan->set_data('member','id_member',$data['input'], $id);
			redirect('member','refresh');
		}
	}

	public function delete_member(){
		if($this->session->userdata('level') != 0){
			$this->session->set_flashdata('msg','Operator/Owner tidak dapat menghapus member');
			redirect('member','refresh');
		}
		$id = $this->uri->segment(3);
		$this->data_perpustakaan->delete_data('member', 'id_member', $id);
		redirect('Member','refresh');
	}

}