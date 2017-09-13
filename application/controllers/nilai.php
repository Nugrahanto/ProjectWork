<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('nilai_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'daftar_nilai3';
			$data['nilai'] = $this->nilai_model->get_data_nilai();
			//$data['matematika'] = $this->nilai_model->get_data_nilai_matematika();
			//$data['fisika'] = $this->nilai_model->get_data_nilai_fisika();
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	// public function edit_nilai_matematika()
	// {
	// 	$id= $this->input->post("id");
	// 	$value= $this->input->post("value");
	// 	$modul= $this->input->post("modul");
	// 	$this->nilai_model->update_nilai_matematika($id,$value,$modul);
	// 	echo "{}";
	// }

	// public function edit_nilai_fisika()
	// {
	// 	$id= $this->input->post("id");
	// 	$value= $this->input->post("value");
	// 	$modul= $this->input->post("modul");
	// 	$this->nilai_model->update_nilai_fisika($id,$value,$modul);
	// 	echo "{}";
	// }

	public function edit_nilai()
	{
		$id= $this->input->post("id");
		$value= $this->input->post("value");
		$modul= $this->input->post("modul");
		$this->nilai_model->update_nilai($id,$value,$modul);
		echo "{}";
	}

	public function tambah_row_nilai()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('nis', 'NIS', 'trim|required');
				$this->form_validation->set_rules('mata_pelajaran', 'Mata Pelajaran', 'trim|required');

				if ($this->form_validation->run() == TRUE) {				
					if ($this->nilai_model->insert_row_nilai() == TRUE) {
						$data['notif_sukses'] 	= 'Berhasil Menambah Data!';
						$data['main_view'] 		= 'daftar_nilai3';
						//$data['matematika'] = $this->nilai_model->get_data_nilai_matematika();
						//$data['fisika'] = $this->nilai_model->get_data_nilai_fisika();
						$data['nilai'] = $this->nilai_model->get_data_nilai();
						$this->load->view('template', $data);

					} else {
						$data['notif_gagal'] 	= 'GAGAL Menambah Data!';
						$data['main_view'] 		= 'daftar_nilai3';
						//$data['matematika'] = $this->nilai_model->get_data_nilai_matematika();
						//$data['fisika'] = $this->nilai_model->get_data_nilai_fisika();
						$data['nilai'] = $this->nilai_model->get_data_nilai();
						$this->load->view('template', $data);
					}
				} else {
					$data['notif_gagal']	= validation_errors();
					$data['main_view'] 		= 'daftar_nilai3';
					//$data['matematika'] = $this->nilai_model->get_data_nilai_matematika();
					//$data['fisika'] = $this->nilai_model->get_data_nilai_fisika();
					$data['nilai'] = $this->nilai_model->get_data_nilai();
					$this->load->view('template', $data);
				}

			} else {
				$data['notif_gagal'] 	= validation_errors();
				$data['main_view'] 		= 'daftar_nilai3';
				//$data['matematika'] = $this->nilai_model->get_data_nilai_matematika();
				//$data['fisika'] = $this->nilai_model->get_data_nilai_fisika();
				$data['nilai'] = $this->nilai_model->get_data_nilai();
				$this->load->view('template', $data);
			}
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	// public function delete_matematika(){
	// 	$id_nilai = $this->input->post("id_nilai");
	// 	$this->nilai_model->delete_matematika($id_nilai);
	// 	echo "{}";
	// }

	// public function delete_fisika(){
	// 	$id_nilai = $this->input->post("id_nilai");
	// 	$this->nilai_model->delete_fisika($id_nilai);
	// 	echo "{}";
	// }

	public function delete_nilai(){
		$id_nilai = $this->input->post("id_nilai");
		$this->nilai_model->delete($id_nilai);
		echo "{}";
	}

}

/* End of file nilai.php */
/* Location: ./application/controllers/nilai.php */