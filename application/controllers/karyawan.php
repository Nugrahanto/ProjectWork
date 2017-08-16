<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('karyawan_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'daftar_karyawan';
			$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}	
	}

	public function simpan_karyawan()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('kode_karyawan', 'Kode Karyawan', 'trim|required');
				$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
				$this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'trim|required');
				$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
				$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
				$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
				$this->form_validation->set_rules('alamat_karyawan', 'Alamat Karyawan', 'trim|required');
				$this->form_validation->set_rules('no_telp', 'No Telepon', 'trim|required');
				$this->form_validation->set_rules('status', 'Status', 'trim|required');
				$this->form_validation->set_rules('mapel1', 'Mata Pelajaran');
				$this->form_validation->set_rules('mapel2', 'Mata Pelajaran');


				if ($this->form_validation->run() == TRUE) {				
					if ($this->karyawan_model->insert_karyawan() == TRUE) {
						$data['notif_sukses'] = 'Berhasil Menambah Data!';
						$data['main_view'] = 'daftar_karyawan';
						$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
						$this->load->view('template', $data);

					} else {
						$data['notif_gagal'] = 'GAGAL Menambah Data!';
						$data['main_view'] = 'daftar_karyawan';
						$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
						$this->load->view('template', $data);
					}
				} else {
					$data['notif_gagal'] = validation_errors();
					$data['main_view'] = 'daftar_karyawan';
					$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
					$this->load->view('template', $data);
				}

			} else {
				$data['notif_gagal'] = validation_errors();
				$data['main_view'] = 'daftar_karyawan';
				$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
				$this->load->view('template', $data);
			}	
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	public function edit_karyawan()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('kode_karyawan', 'kode_karyawan', 'trim|required');
				$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
				$this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'trim|required');
				$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
				$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
				$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
				$this->form_validation->set_rules('alamat_karyawan', 'Alamat Karyawan', 'trim|required');
				$this->form_validation->set_rules('no_telp', 'No Telepon', 'trim|required');
				$this->form_validation->set_rules('status', 'Status', 'trim|required');
				$this->form_validation->set_rules('mapel1', 'Mata Pelajaran');
				$this->form_validation->set_rules('mapel2', 'Mata Pelajaran');

				if($this->form_validation->run() == TRUE){

					$kode_karyawan = $this->input->post('kode_karyawan');

					if ($this->karyawan_model->update_karyawan($kode_karyawan)){
						$data['notif_sukses'] = 'Berhasil Mengedit Data!';
						$data['main_view'] = 'daftar_karyawan';
						$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
						$this->load->view('template', $data);

					} else {
						$data['notif_gagal'] = 'GAGAL Mengedit Data!';
						$data['main_view'] = 'daftar_karyawan';
						$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
						$this->load->view('template', $data);
					}
				} else {
					$data['notif_gagal'] = validation_errors();
					$data['main_view'] = 'daftar_karyawan';
					$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
					$this->load->view('template', $data);
				}

			} else {
				$data['notif_gagal'] = validation_errors();
				$data['main_view'] = 'daftar_karyawan';
				$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
				$this->load->view('template', $data);
			}
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	public function hapus_karyawan()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$kode_karyawan = $this->uri->segment(3);

			if ($this->karyawan_model->delete_karyawan($kode_karyawan)) {
				$data['notif_sukses'] = 'Berhasil Menghapus Data!';
				$data['main_view'] = 'daftar_karyawan';
				$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
				$this->load->view('template', $data);
			} else {
				$data['notif_gagal'] = 'Gagal Menghapus Data!';
				$data['main_view'] = 'daftar_karyawan';
				$data['karyawan'] = $this->karyawan_model->get_data_karyawan();
				$this->load->view('template', $data);
			}
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

}

/* End of file karyawan.php */
/* Location: ./application/controllers/karyawan.php */