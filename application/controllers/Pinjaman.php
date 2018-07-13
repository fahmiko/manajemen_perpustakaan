<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_admin');
		$this->load->model('data_pinjaman');
		$this->load->model('data_perpustakaan');
		$this->load->helper(array('date','form','url','my'));
		$this->load->library('form_validation');
		if(empty($this->session->userdata('username'))){
			redirect('admin','refresh');			
		}else if ($this->session->userdata('level') == '2') {
			redirect('welcome','refresh');
		}
	}
	
	public function test_data(){
		$this->load->library('table');
		$data['book'] = $this->data_pinjaman->get_popular_book();
		$data['member'] = $this->data_pinjaman->get_popular_member();
		echo "Buku yang sering dipinjam<br>";
		echo "<table>
				<tr><td>ID</td>
					<td>Judul</td>
					<td>Total Pinjam</td>
				</tr>";

		foreach ($data['book']->result() as $show) {
			echo "<tr><td>";
			echo $show->id_buku."</td><td>";
			echo $show->judul."</td><td>";
			echo $show->total."</td></tr>";
		}
		echo "</table>";
		echo "<br>Member yang sering meminjam<br>";
		echo "<table>
				<tr><td>ID</td>
					<td>Judul</td>
					<td>Total Pinjam</td>
				</tr>";

		foreach ($data['member']->result() as $show) {
			echo "<tr><td>";
			echo $show->id_member."</td><td>";
			echo $show->nama."</td><td>";
			echo $show->total."</td></tr>";
		}
		echo "</table>";
	}

	public function index()
	{
		$data['pinjaman'] = $this->data_pinjaman->get_data_pinjaman();
		$this->load->view('templates/header');
		$this->load->view('admin/pinjaman', $data, FALSE);
		$this->load->view('templates/footer');
	}

	public function tambah_pinjaman(){
		$data['buku'] = $this->data_perpustakaan->get_data('buku');
		$data['member'] = $this->data_perpustakaan->get_data('member');
		$this->form_validation->set_rules('catatan', 'Catatan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('admin/tambah_pinjaman',$data);
			$this->load->view('templates/footer');
		} else {
			$data['input'] = array(
				'id_user' => $this->session->userdata('id_user'),
				'id_buku' => $this->input->post('id_buku'),
				'id_member' => $this->input->post('id_member'),
				'tgl_pinjam' => date('Y-m-d'),
				'tgl_kembali' => $this->input->post('tgl_kembali'),
				'catatan' => $this->input->post('catatan'),
				'status' => 'dipinjam',
				'denda' => '0'
			);
			$this->data_perpustakaan->set_data('pinjaman', '', $data['input'], $id = 0);
			redirect('pinjaman','refresh');
		}
		
	}

	public function pengembalian(){
			if($this->input->post('id_pinjaman') != null){
				$id = $this->input->post('id_pinjaman');
				$data['pinjam'] = $this->data_pinjaman->get_pinjaman($id);

				if ($data['pinjam']->num_rows() == 0) {
					$this->load->view('templates/header');
					$this->load->view('admin/pengembalian',$data);
					$this->load->view('templates/footer');
				}else{
					foreach ($data['pinjam']->result() as $key) {
						$date1 = date_create($key->tgl_kembali);
					}
					$date2 = date_create(date('Y-m-d'));
					$diff = date_diff($date1,$date2);
					$data['hari'] = 0;
					$data['denda'] = 0;
					if($date2 <= $date1){
						$data['hari'] = 0;
						$data['status'] = '<button class="btn btn-outline-success">Tepat Waktu</button>';
					}else{
						$data['hari'] = $diff->format("%a");	
						$data['denda'] = $data['hari'] * 2000;
						$data['status'] = '<button class="btn btn-outline-danger">Terlambat</button>';
					}

					$this->load->view('templates/header');
					$this->load->view('admin/pengembalian',$data);
					$this->load->view('templates/footer');
			}
			}else{
				$data['pinjam'] = null;
				$this->load->view('templates/header');
				$this->load->view('admin/pengembalian',$data);
				$this->load->view('templates/footer');
			}
			// $date1 = date_create(date('Y-m-d'));
			// $date2 = date_create(date('Y-m-d'));
			// if($date1 > $date2){
			// //difference between two dates
			// $diff = date_diff($date1,$date2);
			// //count days
			// echo 'Days Count '.$diff->format("%a");
		}

	public function checkout(){
		$id = $this->input->post('id_pinjaman');
		$data['input'] = array(
			'denda' => $this->input->post('denda'),
			'status' => 'kembali'
		);	
		$this->data_perpustakaan->set_data('pinjaman', 'id_pinjaman', $data['input'], $id);
		redirect('pinjaman','refresh');
	}

	public function json_pinjaman(){
		$data = $this->data_pinjaman->get_data_pinjaman();
		echo json_encode(array('data' => $data->result()));
	}

	public function json_pinjaman_by_id($id){
		$data = $this->data_pinjaman->get_pinjaman_by_id($id);
		echo json_encode($data->row_array());
	}

}

/* End of file Pinjaman.php */
/* Location: ./application/controllers/Pinjaman.php */