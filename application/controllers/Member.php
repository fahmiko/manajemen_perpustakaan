<?php
class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_perpustakaan');
	}

	public function index()
	{
		$data['member'] = $this->data_perpustakaan->get_data('member');
		$this->load->view('templates/header');
		$this->load->view('admin/member', $data, FALSE);
		$this->load->view('templates/footer');
	}

}