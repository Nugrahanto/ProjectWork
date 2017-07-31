<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{	
		
	}

	public function kelas_10()
	{
		$data['main_view'] = 'daftar_pelajaran_X';
		$this->load->view('template', $data);
	}

	public function kelas_11()
	{
		$data['main_view'] = 'daftar_pelajaran_XI';
		$this->load->view('template', $data);
	}

	public function kelas_12()
	{
		$data['main_view'] = 'daftar_pelajaran_XII';
		$this->load->view('template', $data);
	}

}

/* End of file pelajaran.php */
/* Location: ./application/controllers/pelajaran.php */