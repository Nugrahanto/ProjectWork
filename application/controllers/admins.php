<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			redirect(base_url('index.php/home/'));
		} else {
			$this->load->view('login_admin');
		}
	}

	public function masuk(){

		if($this->input->post('submit')){
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() == TRUE){
				if ($this->admin_model->cek() == TRUE){
					redirect(base_url('index.php/home/'));

				} else {
					$data['notif'] = 'Username atau Password Salah!';
					$this->load->view('login_admin', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_admin', $data);
			}

		} else {
			$data['notif'] = 'ERROR!';
			$this->load->view('login_admin', $data);
		}
	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect('admins');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */