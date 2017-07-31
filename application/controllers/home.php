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
		$data['main_view'] = 'index';
		$this->load->view('template', $data);
	}

}

/* End of file admin */
/* Location: ./application/controllers/admin */