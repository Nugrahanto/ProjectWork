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
			$data['main_view'] = 'daftar_nilai2';
			$data['nilai'] = $this->nilai_model->get_data_nilai();
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	public function edit_nilai()
	{
		$id= $this->input->post("id");
		$value= $this->input->post("value");
		$modul= $this->input->post("modul");
		$this->nilai_model->update_nilai($id,$value,$modul);
		echo "{}";
	}

}

/* End of file nilai.php */
/* Location: ./application/controllers/nilai.php */