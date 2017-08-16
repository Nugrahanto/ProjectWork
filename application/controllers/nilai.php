<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'daftar_nilai';
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

}

/* End of file nilai.php */
/* Location: ./application/controllers/nilai.php */