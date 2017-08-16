<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{	
		if($this->session->userdata('siswa_logged_in') == TRUE)
		{
			$data['main_view'] = 'siswa_dashboard';
			$this->load->view('siswa_template', $data);
		} 
		else{
			redirect(base_url('index.php/login'));
		}
	}

}

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */