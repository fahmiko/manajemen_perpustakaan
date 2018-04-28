<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_perpustakaan');
		if(empty($this->session->userdata('username'))){
			redirect('admin','refresh');
		}
	}
	public function index()
	{
		$data['buku'] = $this->data_perpustakaan->get_data_join('buku','kategori','id_kategori');
		$data['kategori'] = $this->data_perpustakaan->get_data('kategori');
		$this->load->view('templates/header');
		$this->load->view('admin/buku', $data, FALSE);
		$this->load->view('templates/footer');
	}

	//Fungsi tambah buku dan kategori
	public function tambah_buku(){
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
			$this->data_perpustakaan->set_data('buku', 'id_buku', $data['input'], 0);
			redirect('buku','refresh');
		}
	}

	public function tambah_kategori(){
		$data['input'] = array(
			'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('keterangan')
		);
		$this->data_perpustakaan->set_data('kategori', 'id_kategori', $data['input'], 0);
		redirect('buku','refresh');
	}

	//Fungsi edit buku dan kategori

	public function edit_buku(){
		$id = $this->uri->segment(3);
		$data['kategori'] = $this->data_perpustakaan->get_data('kategori');
		$data['buku'] = $this->data_perpustakaan->get_data_by_id('buku', 'id_buku', $id);
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
			$this->load->view('templates/header');
			$this->load->view('admin/edit_buku', $data, FALSE);
			$this->load->view('templates/footer');
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
				$this->data_perpustakaan->set_data('buku', 'id_buku', $data['input'], $id);
				redirect('buku','refresh');
			}
		}
	}

	public function edit_kategori(){
		$id = $this->uri->segment(3);
		$data['kategori'] = $this->data_perpustakaan->get_data_by_id('kategori', 'id_kategori', $id);
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[5]',
				array('required' => "Nama belum terisi",
					  'min_length' => "Nama minimal 5 karakter"
			));
		$this->form_validation->set_rules('keterangan', 'fieldlabel', 'required|min_length[10]',
				array('required' => "Keterangan kosong",
					  'min_length' => "Keterangan minimal 10 karakter"
			));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('admin/edit_kategori', $data, FALSE);
			$this->load->view('templates/footer');
		} else {
			$data['input'] = array(
			'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('keterangan')
			);
			$this->data_perpustakaan->set_data('kategori', 'id_kategori', $data['input'], $id);
			redirect('buku','refresh');
		}
	}

	//Fungsi Delete Buku dan kategori
	public function delete_buku(){
		$id = $this->uri->segment(3);
		$data = $this->data_perpustakaan->get_data_by_id('buku', 'id_buku', $id);
		if(file_exists('./assets/img/'.$data['gambar'])){
				unlink('./assets/img/'.$data['gambar']);
			}
		$this->data_perpustakaan->delete_data('buku', 'id_buku', $id);
		redirect('buku','refresh');
	}

	public function delete_kategori(){
		$id = $this->uri->segment(3);
		$this->data_perpustakaan->delete_data('kategori', 'id_kategori', $id);
		redirect('buku','refresh');
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */