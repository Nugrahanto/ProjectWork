<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
			redirect(base_url('index.php/profil/'));
		} else {
			$this->load->view('login_siswa');
		}
	}

	public function masuk(){

		if($this->input->post('submit')){
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() == TRUE){
				if ($this->user_model->cek() == TRUE){
					redirect(base_url('index.php/profil/'));

				} else {
					$data['notif'] = 'Nis atau No. Telp Salah!';
					$this->load->view('login_siswa', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_siswa', $data);
			}

		} else {
			$data['notif'] = 'ERROR!';
			$this->load->view('login_siswa', $data);
		}
	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect(base_url('index.php'));
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */