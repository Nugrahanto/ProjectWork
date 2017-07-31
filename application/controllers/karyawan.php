<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{	
		$data['main_view'] = 'daftar_karyawan';
		$this->load->view('template', $data);
	}

	public function tambah_guru()
	{
		$data['main_view'] = 'tambah_karyawan';
		$this->load->view('template', $data);
	}

}

/* End of file guru.php */
/* Location: ./application/controllers/guru.php */