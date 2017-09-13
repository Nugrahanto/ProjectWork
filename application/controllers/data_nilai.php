<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_nilai extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		if($this->session->userdata('siswa_logged_in') == TRUE)
		{
			$data['main_view'] = 'nilai_siswa';
			$this->load->view('siswa_template', $data);
		} 
		else{
			redirect(base_url('index.php/login'));
		}	
	}

	public function nilai()
	{
		if($this->session->userdata('siswa_logged_in') == TRUE)
		{
			$data['main_view'] = 'nilai_siswa';
			$nis = $this->uri->segment(3) . "/" . $this->uri->segment(4);
			$data['matematika'] = $this->user_model->nilai_matematika($nis);
			$data['fisika'] 	= $this->user_model->nilai_fisika($nis);
			$data['bing'] 	= $this->user_model->nilai_bing($nis);
			$this->load->view('siswa_template', $data);
		} 
		else{
			redirect(base_url('index.php/login'));
		}	
	}

}

/* End of file data_nilai.php */
/* Location: ./application/controllers/data_nilai.php */