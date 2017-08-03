<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_nilai extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{	
		$data['main_view'] = 'input_nilai_view';
		$this->load->view('template', $data);
	}

}

/* End of file mata_pelajaran.php */
/* Location: ./application/controllers/mata_pelajaran.php */