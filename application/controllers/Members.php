<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model(array('data_member','data_pinjaman','data_perpustakaan'));
	}

	public function index()
	{
		if($this->session->userdata('usr_member') == null){
			redirect('members/login','refresh');
		}
		$this->load->view('members/header');
		$this->load->view('members/beranda');
		$this->load->view('members/footer');
	}

	public function pinjaman(){
		if($this->session->userdata('usr_member') == null){
			redirect('members/login','refresh');
		}
		$this->load->view('members/header');
		$this->load->view('members/pinjaman');
		$this->load->view('members/footer');	
	}

	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('members/login');
		} else {
			$data['login'] = array(
				'usr_member' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);
			$this->data_member->cek_login($data);
		}
	}

	public function tambah_pinjaman(){
		if($this->session->userdata('usr_member') == null){
			redirect('members/login','refresh');
		}
		$date = new DateTime(date('Y-m-d'));
		if($this->session->userdata('type')=='gold'){
			$date->modify('+7 day');	
		}else{
			$date->modify('+3 day');	
		}
		$data['tgl_kembali'] = $date->format('Y-m-d');
		$data['buku'] = $this->data_perpustakaan->get_data('buku');
		$this->form_validation->set_rules('id_member', 'Id Member', 'required');
		$this->form_validation->set_rules('catatan', 'Catatan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('members/header');
			$this->load->view('members/peminjaman',$data);
			$this->load->view('members/footer');
		} else {
			if($this->session->userdata('type')=='silver'){
				$id_member = $this->session->userdata('id_member');
				$cek_member = $this->data_member->cek_member($id_member);
				
				if($cek_member >= 5){
					$this->session->set_flashdata('msg','Batas maksimal peminjaman member silver 5');
					redirect('members/tambah_pinjaman','refresh');
				}
			}

			$data['input'] = array(
				'id_buku' => $this->input->post('id_buku'),
				'id_member' => $this->session->userdata('id_member'),
				'tgl_pinjam' => date('Y-m-d'),
				'tgl_kembali' => $data['tgl_kembali'],
				'catatan' => $this->input->post('catatan'),
				'status' => 'dipinjam',
				'denda' => '0'
			);

			$this->data_perpustakaan->set_data('pinjaman', '', $data['input'], $id = 0);
			$this->session->set_flashdata('msg','Buku berhasil dipinjam');
			redirect('members/pinjaman','refresh');
			
		}
	}

	public function json_pinjaman(){
		$id_member = $this->session->userdata('id_member');
		$data = $this->data_pinjaman->get_pinjaman_by_member($id_member);
		echo json_encode(array('data' => $data->result()));
	}

	public function json_pinjaman_by_id($id){
		$data = $this->data_pinjaman->get_pinjaman_by_id($id);
		echo json_encode($data->row_array());
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('members/login','refresh');
	}

}

/* End of file Members.php */
/* Location: ./application/controllers/Members.php */