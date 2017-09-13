<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catatan extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('catatan_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'daftar_catatan_siswa';
			$data['catatan'] = $this->catatan_model->get_data_catatan();
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}	
	}

	public function tambah_row_catatan()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');

				if ($this->form_validation->run() == TRUE) {				
					if ($this->catatan_model->insert_row_catatan() == TRUE) {
						$data['notif_sukses'] 	= 'Berhasil Menambah Data!';
						$data['main_view'] 		= 'daftar_catatan_siswa';
						$data['catatan'] = $this->catatan_model->get_data_catatan();
						$this->load->view('template', $data);

					} else {
						$data['notif_gagal'] 	= 'GAGAL Menambah Data!';
						$data['main_view'] 		= 'daftar_catatan_siswa';
						$data['catatan'] = $this->catatan_model->get_data_catatan();
						$this->load->view('template', $data);
					}
				} else {
					$data['notif_gagal']	= validation_errors();
					$data['main_view'] 		= 'daftar_catatan_siswa';
					$data['catatan'] = $this->catatan_model->get_data_catatan();
					$this->load->view('template', $data);
				}

			} else {
				$data['notif_gagal'] 	= validation_errors();
				$data['main_view'] 		= 'daftar_catatan_siswa';
				$data['catatan'] = $this->catatan_model->get_data_catatan();
				$this->load->view('template', $data);
			}
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	public function edit_catatan()
	{
		$id= $this->input->post("id");
		$value= $this->input->post("value");
		$modul= $this->input->post("modul");
		$this->catatan_model->update_catatan($id,$value,$modul);
		echo "{}";
	}

	public function delete(){
		$id_catatan = $this->input->post("id_catatan");
		$this->catatan_model->delete($id_catatan);
		echo "{}";
	}

}

/* End of file catatan.php */
/* Location: ./application/controllers/catatan.php */