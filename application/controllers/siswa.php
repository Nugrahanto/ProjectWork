<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

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
		$data['main_view'] = 'daftar_siswa_X';
		$this->load->view('template', $data);
	}

	public function kelas_11()
	{
		$data['main_view'] = 'daftar_siswa_XI';
		$this->load->view('template', $data);
	}

	public function kelas_12()
	{
		$data['main_view'] = 'daftar_siswa_XII';
		$this->load->view('template', $data);
	}

}

/* End of file siswa.php */
/* Location: ./application/controllers/siswa.php */