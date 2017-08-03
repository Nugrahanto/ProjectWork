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
		$data['main_view'] = 'daftar_karyawan';
		$data['guru'] = $this->karyawan_model->get_data_guru();
		$data['tu'] = $this->karyawan_model->get_data_tu();
		$data['kesiswaan'] = $this->karyawan_model->get_data_kesiswaan();
		$this->load->view('template', $data);
	}

	public function tambah_karyawan()
	{
		$data['main_view'] = 'tambah_karyawan';
		$this->load->view('template', $data);
	}

	public function simpan_karyawan()
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
					$data['notif'] = 'Tambah Karyawan Berhasil';
					$data['main_view'] = 'tambah_karyawan';
					$this->load->view('template', $data);
				}else {
					$data['notif'] = 'Tambah Karyawan Gagal';
					$data['main_view'] = 'tambah_karyawan';
					$this->load->view('template', $data);
				}
			}else{
				$data['notif'] = validation_errors();
				$data['main_view'] = 'tambah_karyawan';
				$this->load->view('template', $data);
			}
		}	
	}

	public function edit_karyawan()
	{
		$data['main_view'] = 'edit_karyawan';
				
		$kode_karyawan = $this->uri->segment(3);

		//
		$data['edit_karyawan'] = $this->karyawan_model->detail_data_karyawan($kode_karyawan);
		//mengload template dan data
		$this->load->view('template', $data);	
	}

	public function do_edit_karyawan()
	{
		if ($this->input->post('submit')) {
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
				
				if ($this->karyawan_model->edit_data_karyawan($this->uri->segment(3)) == TRUE) {
					$data['notif_sukses'] = 'Edit Sukses';
					$data['edit_karyawan'] = $this->karyawan_model->detail_data_karyawan($this->uri->segment(3));
					$data['main_view'] = 'edit_karyawan';
					$this->load->view('template', $data);
				}
				else{
					$data['notif_gagal'] = 'Edit Gagal!';
					$data['edit_karyawan'] = $this->karyawan_model->detail_data_karyawan($this->uri->segment(3));
					$data['main_view'] = 'edit_karyawan';
					$this->load->view('template', $data);
				}
			} else {
				$data['notif_gagal'] = validation_errors();
				$data['edit_karyawan'] = $this->karyawan_model->detail_data_karyawan($this->uri->segment(3));
				$data['main_view'] = 'edit_karyawan';
				$this->load->view('template', $data);
			}
		}
	}

}

/* End of file guru.php */
/* Location: ./application/controllers/guru.php */