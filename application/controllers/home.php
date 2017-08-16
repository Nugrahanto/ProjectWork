<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{	
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'index';
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

}

/* End of file admin */
/* Location: ./application/controllers/admin */