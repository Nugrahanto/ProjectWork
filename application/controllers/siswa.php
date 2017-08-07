<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('siswa_model');
	}

	public function index()
	{	
		
	}

	public function tambah_siswa()
	{
		$data['main_view'] = 'tambah_siswa';
		$this->load->view('template', $data);
	}

	// public function tambah_siswa_grosir()
	// {
	// 	$data['main_view'] = 'tambah_siswa_grosir';
	// 	$this->load->view('template', $data);
	// }

	public function kelas_10()
	{
		$data['main_view'] = 'daftar_siswa_X';
		$data['XRPL'] = $this->siswa_model->get_data_siswaXRPL();
		$data['XTKJ'] = $this->siswa_model->get_data_siswaXTKJ();
		$this->load->view('template', $data);
	}

	public function kelas_11()
	{
		$data['main_view'] = 'daftar_siswa_XI';
		$data['XIRPL'] = $this->siswa_model->get_data_siswaXIRPL();
		$data['XITKJ'] = $this->siswa_model->get_data_siswaXITKJ();
		$this->load->view('template', $data);
	}

	public function kelas_12()
	{
		$data['main_view'] = 'daftar_siswa_XII';
		$data['XIIRPL'] = $this->siswa_model->get_data_siswaXIIRPL();
		$data['XIITKJ'] = $this->siswa_model->get_data_siswaXIITKJ();
		$this->load->view('template', $data);
	}

	public function simpan_siswa()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('tingkat', 'Tingkat', 'trim|required');
			$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
			$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
			$this->form_validation->set_rules('nis', 'NIS', 'trim|required');
			$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Siswa', 'trim|required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Siswa', 'trim|required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
			$this->form_validation->set_rules('agama', 'Agama Siswa', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat Siswa', 'trim|required');
			$this->form_validation->set_rules('no_telp', 'Nomor Telp', 'trim|required');
			$this->form_validation->set_rules('angkatan', 'Angkatan', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				
				if ($this->siswa_model->insert_siswa() == TRUE) {
					$data['notif'] = 'Tambah Siswa Berhasil';
					$data['main_view'] = 'tambah_siswa';
					$this->load->view('template', $data);
				}else {
					$data['notif'] = 'Tambah Siswa Gagal';
					$data['main_view'] = 'tambah_siswa';
					$this->load->view('template', $data);
				}
			}else{
				$data['notif'] = validation_errors();
				$data['main_view'] = 'tambah_siswa';
				$this->load->view('template', $data);
			}
		}	
	}

	public function edit_siswa()
	{
		$data['main_view'] = 'edit_siswa';
				
		$nis = $this->uri->segment(3) . "/" . $this->uri->segment(4);

		//
		$data['edit_siswa'] = $this->siswa_model->detail_data_siswa($nis);
		//mengload template dan data
		$this->load->view('template', $data);	
	}

	public function do_edit_siswa()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('tingkat', 'Tingkat', 'trim|required');
			$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
			$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
			$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Siswa', 'trim|required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Siswa', 'trim|required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
			$this->form_validation->set_rules('agama', 'Agama Siswa', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat Siswa', 'trim|required');
			$this->form_validation->set_rules('no_telp', 'Nomor Telp', 'trim|required');
			$this->form_validation->set_rules('angkatan', 'Angkatan', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				
				$nis = $this->uri->segment(3) . "/" . $this->uri->segment(4);

				if ($this->siswa_model->edit_data_siswa($nis) == TRUE) {
					$data['notif_sukses'] = 'Edit Sukses';
					$data['edit_siswa'] = $this->siswa_model->detail_data_siswa($nis);
					$data['main_view'] = 'edit_siswa';
					$this->load->view('template', $data);
				}
				else{
					$data['notif_gagal'] = 'Edit Gagal!';
					$data['edit_siswa'] = $this->siswa_model->detail_data_siswa($nis);
					$data['main_view'] = 'edit_siswa';
					$this->load->view('template', $data);
				}
			} else {
				$data['notif_gagal'] = validation_errors();
				$data['edit_siswa'] = $this->siswa_model->detail_data_siswa($nis);
				$data['main_view'] = 'edit_siswa';
				$this->load->view('template', $data);
			}
		}
	}

	public function tambah_siswa_grosir()
	{
		$this->siswa_model->uploadData();
		$data['main_view'] = 'tambah_siswa';
		$this->load->view('template', $data);
	}
}

/* End of file siswa.php */
/* Location: ./application/controllers/siswa.php */