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
			$data['main_view'] = 'daftar_nilai';
			$data['nilai'] = $this->nilai_model->get_data_nilai();
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

}

/* End of file nilai.php */
/* Location: ./application/controllers/nilai.php */