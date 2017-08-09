<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('kelas_model');
	}

	public function index()
	{	
		$data['main_view'] = 'daftar_kelas';
		$data['kelas'] = $this->kelas_model->get_data_kelas();
		$this->load->view('template', $data);
	}

	public function simpan_kelas()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('kode_kelas', 'Kode Kelas', 'trim|required');
			$this->form_validation->set_rules('tingkat_kelas', 'Tingkat Kelas', 'trim|required');
			$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'trim|required');
			$this->form_validation->set_rules('jumlah_siswa', 'Jumlah Siswa', 'trim|required');
			$this->form_validation->set_rules('penanggung_jawab', 'Penanggung Jawab Kelas', 'trim|required');

			if ($this->form_validation->run() == TRUE) {				
				if ($this->kelas_model->insert_kelas() == TRUE) {
					$data['notif_sukses'] = 'Berhasil Menambah Data!';
					$data['main_view'] = 'daftar_kelas';
					$data['kelas'] = $this->kelas_model->get_data_kelas();
					$this->load->view('template', $data);

				} else {
					$data['notif_gagal'] = 'GAGAL Menambah Data!';
					$data['main_view'] = 'daftar_kelas';
					$data['kelas'] = $this->kelas_model->get_data_kelas();
					$this->load->view('template', $data);
				}
			} else {
				$data['notif_gagal'] = validation_errors();
				$data['main_view'] = 'daftar_kelas';
				$data['kelas'] = $this->kelas_model->get_data_kelas();
				$this->load->view('template', $data);
			}

		} else {
			$data['notif_gagal'] = validation_errors();
			$data['main_view'] = 'daftar_kelas';
			$data['kelas'] = $this->kelas_model->get_data_kelas();
			$this->load->view('template', $data);
		}	
	}

}

/* End of file kelas.php */
/* Location: ./application/controllers/kelas.php */