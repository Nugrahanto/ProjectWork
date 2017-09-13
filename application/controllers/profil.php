<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
	}

	public function index()
	{	
		if($this->session->userdata('siswa_logged_in') == TRUE)
		{
			$data['main_view'] = 'siswa_dashboard';
			$data['siswa'] = $this->user_model->get_data_siswa();
			$this->load->view('siswa_template', $data);
		} 
		else{
			redirect(base_url('index.php/login'));
		}
	}

	public function catatan()
	{
		if($this->session->userdata('siswa_logged_in') == TRUE)
		{
			$data['main_view'] = 'catatan_siswa';
			$nis = $this->uri->segment(3) . "/" . $this->uri->segment(4);
			$data['catatan'] = $this->user_model->catatan_data_siswa($nis);
			$this->load->view('siswa_template', $data);
		} 
		else{
			redirect(base_url('index.php/login'));
		}	
	}

}

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */