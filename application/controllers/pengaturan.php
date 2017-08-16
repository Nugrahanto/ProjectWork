<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('siswa_model');
	}

	public function index()
	{
		if($this->session->userdata('siswa_logged_in') == TRUE)
		{
			$data['main_view'] = 'siswa_pengaturan';
			$this->load->view('siswa_template', $data);
		} 
		else{
			redirect(base_url('index.php/login'));
		}	
	}

	public function update()
	{
		
	}

}

/* End of file pengaturan.php */
/* Location: ./application/controllers/pengaturan.php */