<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{	
		$data['main_view'] = 'daftar_kelas';
		$this->load->view('template', $data);
	}

	public function tambah_kelas()
	{
		$data['main_view'] = 'tambah_kelas';
		$this->load->view('template', $data);
	}

}

/* End of file kelas.php */
/* Location: ./application/controllers/kelas.php */