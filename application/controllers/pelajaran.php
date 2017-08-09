<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('pelajaran_model');
	}

	public function index()
	{	
		$data['main_view'] = 'daftar_pelajaran';
		$data['pelajaran'] = $this->pelajaran_model->get_data_pelajaran();
		$this->load->view('template', $data);
	}

	public function simpan_pelajaran()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('kode_pelajaran', 'Kode Pelajaran', 'trim|required');
			$this->form_validation->set_rules('mata_pelajaran', 'Mata Pelajaran', 'trim|required');
			$this->form_validation->set_rules('lama_jam', 'Lama Jam/Minggu', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
			$this->form_validation->set_rules('tingkat', 'Tingkat', 'trim|required');

			if ($this->form_validation->run() == TRUE) {				
				if ($this->pelajaran_model->insert_pelajaran() == TRUE) {
					$data['notif_sukses'] 	= 'Berhasil Menambah Data!';
					$data['main_view'] 		= 'daftar_pelajaran';
					$data['pelajaran'] 		= $this->pelajaran_model->get_data_pelajaran();
					$this->load->view('template', $data);

				} else {
					$data['notif_gagal'] 	= 'GAGAL Menambah Data!';
					$data['main_view'] 		= 'daftar_pelajaran';
					$data['pelajaran']		= $this->pelajaran_model->get_data_pelajaran();
					$this->load->view('template', $data);
				}
			} else {
				$data['notif_gagal']	= validation_errors();
				$data['main_view'] 		= 'daftar_pelajaran';
				$data['pelajaran'] 		= $this->pelajaran_model->get_data_pelajaran();
				$this->load->view('template', $data);
			}

		} else {
			$data['notif_gagal'] 	= validation_errors();
			$data['main_view'] 		= 'daftar_pelajaran';
			$data['pelajaran'] 		= $this->pelajaran_model->get_data_pelajaran();
			$this->load->view('template', $data);
		}	
	}

}

/* End of file pelajaran.php */
/* Location: ./application/controllers/pelajaran.php */