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
		$data['main_view'] = 'daftar_nilai';
		$this->load->view('template', $data);
	}

}

/* End of file nilai.php */
/* Location: ./application/controllers/nilai.php */