<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_catatan extends CI_Controller {

	public $data='';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		if($this->session->userdata('siswa_logged_in') == TRUE)
		{
			$data['main_view'] = 'catatan_siswa';
			$this->load->view('siswa_template', $data);
		} 
		else{
			redirect(base_url('index.php/login'));
		}	
	}

	public function catatan()
	{
		if($this->session->userdata('siswa_logged_in') == TRUE)
		{
			$data['main_view'] = 'catatan_siswa';
			$nis = $this->uri->segment(3) . "/" . $this->uri->segment(4);
			$data['catatan'] = $this->user_model->catatan_data_siswa($nis);

			$this->load->view('siswa_template', $data);
		} 
		else{
			redirect(base_url('index.php/login'));
		}	
	}

}

/* End of file data_catatan.php */
/* Location: ./application/controllers/data_catatan.php */