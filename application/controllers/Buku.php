<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_buku');
		$this->load->model('data_kategori');
	}
	public function index()
	{
		$data['buku'] = $this->data_buku->get_data_buku();
		$data['kategori'] = $this->data_kategori->get_data_kategori();
		$this->load->view('admin/header');
		$this->load->view('admin/buku', $data, FALSE);
		$this->load->view('admin/footer');
	}

	public function edit_buku(){
		$id = $this->uri->segment(3);
		$data['kategori'] = $this->data_buku->get_data_buku();
		$data['buku'] = $this->data_buku->get_data_buku_by_id($id);
		
		$this->load->view('admin/header');
		$this->load->view('admin/edit_buku', $data, FALSE);
		$this->load->view('admin/footer');
	}

	public function edit_kategori(){
		$id = $this->uri->segment(3);
		$data['kategori'] = $this->data_kategori->get_data_kategori_by_id($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[5]',
				array('required' => "Nama belum terisi",
					  'min_length' => "Nama minimal 5 karakter"
			));
		$this->form_validation->set_rules('keterangan', 'fieldlabel', 'required|min_length[10]',
				array('required' => "Keterangan kosong",
					  'min_length' => "Keterangan minimal 10 karakter"
			));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/edit_kategori', $data, FALSE);
			$this->load->view('admin/footer');
		} else {
			$data['input'] = array(
			'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('keterangan')
			);
			$this->data_kategori->set_data_kategori($data['input'], $id);
			redirect('admin/buku','refresh');
		}
	}

	public function tambah(){
		$data['buku'] = $this->data_buku->get_data_buku();
		$config['upload_path'] = 'assets/img/';//direktori tempat upload file
		$config['allowed_types'] = 'jpg|png|jpeg';//file yang diperbolehkan
			
		$this->load->library('upload', $config);//menyimpan konfigurasi
			
		if ( ! $this->upload->do_upload('userfile')){//Jika file gagal terupload
			$error = array('error' => $this->upload->display_errors());//menampilkan pesan error
			print_r($error);//print array pesan error
		}else{
			$data = array('upload_data' => $this->upload->data());
			$data['input'] = array(
				'id_kategori' => $this->input->post('kategori'),
				'judul' => $this->input->post('judul'),
				'keterangan' => $this->input->post('keterangan'),
				'penerbit' => $this->input->post('penerbit'),
				'gambar' => $this->upload->data('file_name')
			);
			$this->data_buku->set_data_buku($data['input'], 0);
			redirect('admin/buku','refresh');
		}
	}

	public function tambah_kategori(){
		$data['input'] = array(
			'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('keterangan')
		);
		$this->data_kategori->set_data_kategori($data['input'], 0);
		redirect('admin/buku','refresh');
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['kategori'] = $this->data_buku->get_data_buku();
		$data['buku'] = $this->data_buku->get_data_buku_by_id($id);
		$this->form_validation->set_rules('judul', 'Judul', 'required|min_length[5]',
				array('required' => "Judul belum terisi",
					  'min_length' => "Judul minimal 5 karakter"
			));
		$this->form_validation->set_rules('keterangan', 'fieldlabel', 'required|min_length[10]',
				array('required' => "Keterangan kosong",
					  'min_length' => "Keterangan minimal 10 karakter"
			));
		$this->form_validation->set_rules('penerbit', 'Penerbit', 'required',
				array('required' => "Penerbit kosong"
			));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/edit_buku', $data, FALSE);
			$this->load->view('admin/footer');
		} else {
			$config['upload_path'] = 'assets/img/';//direktori tempat upload file
			$config['allowed_types'] = 'jpg|png|jpeg';//file yang diperbolehkan
			
			$this->load->library('upload', $config);//menyimpan konfigurasi
			
			if ( ! $this->upload->do_upload('userfile')){//Jika file gagal terupload
				$error = array('error' => $this->upload->display_errors());//menampilkan pesan error
				print_r($error);//print array pesan error
			}else{
				if(file_exists('./assets/img/'.$this->input->post('gambar'))){
					unlink('./assets/img/'.$this->input->post('gambar'));
				}
				$data = array('upload_data' => $this->upload->data());
				$data['input'] = array(
					'id_kategori' => $this->input->post('kategori'),
					'judul' => $this->input->post('judul'),
					'keterangan' => $this->input->post('keterangan'),
					'penerbit' => $this->input->post('penerbit'),
					'gambar' => $this->upload->data('file_name')
				);
				$this->data_buku->set_data_buku($data['input'], $id);
				redirect('admin/buku','refresh');
			}
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$data = $this->data_buku->get_data_buku_by_id($id);
		if(file_exists('./assets/img/'.$data['gambar'])){
				unlink('./assets/img/'.$data['gambar']);
			}
		$this->data_buku->delete_data_buku($id);
		redirect('admin/buku','refresh');
	}

	public function delete_kategori(){
		$id = $this->uri->segment(3);
		$this->data_kategori->delete_data_kategori($id);
		redirect('admin/buku','refresh');
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */