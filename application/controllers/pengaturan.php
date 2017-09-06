<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

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
			$data['main_view'] = 'siswa_pengaturan';
			$this->load->view('siswa_template', $data);
		} 
		else{
			redirect(base_url('index.php/login'));
		}	
	}

	// public function data_siswa()
	// {
	// 	if($this->session->userdata('siswa_logged_in') == TRUE)
	// 	{
	// 		$data['main_view'] = 'siswa_pengaturan';
					
	// 		$nis = $this->uri->segment(3) . "/" . $this->uri->segment(4);

	// 		//
	// 		$data['edit_siswa'] = $this->user_model->detail_data_siswa($nis);
	// 		//mengload template dan data
	// 		$this->load->view('siswa_template', $data);	
	// 	} 
	// 	else{
	// 		redirect(base_url('index.php/admins'));
	// 	}
	// }

	public function update()
	{
		if($this->session->userdata('siswa_logged_in') == TRUE)
		{
			
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('tingkat', 'Tingkat', 'trim|required');
				$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
				$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
				$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
				$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Siswa', 'trim|required');
				$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Siswa', 'trim|required');
				$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
				$this->form_validation->set_rules('agama', 'Agama Siswa', 'trim|required');
				$this->form_validation->set_rules('alamat', 'Alamat Siswa', 'trim|required');
				$this->form_validation->set_rules('no_telp', 'Nomor Telp', 'trim|required');
				$this->form_validation->set_rules('angkatan', 'Angkatan', 'trim|required');
					
				if($this->form_validation->run() == TRUE){

					$nis = $this->uri->segment(3) . "/" . $this->uri->segment(4);

					if ($this->user_model->edit_data_siswa($nis) == TRUE) {
						$data['notif_sukses_edit'] = 'Berhasil Mengedit Data! <br> Silahkan Sign Out dan kemudian Sign In kembali!';
						$data['main_view'] = 'siswa_dashboard';
						$this->load->view('siswa_template', $data);

					} else {
						$data['notif_gagal'] = 'GAGAL Mengedit Data!';
						$data['main_view'] = 'siswa_pengaturan';
						$this->load->view('siswa_template', $data);
					}
				} else {
					$data['notif_gagal'] = validation_errors();
					$data['main_view'] = 'siswa_pengaturan';
						$this->load->view('siswa_template', $data);
				}

			} else {
				$data['notif_gagal'] = validation_errors();
				$data['main_view'] = 'siswa_pengaturan';
				$this->load->view('siswa_template', $data);
			}
		}
		else{
			redirect(base_url('index.php/login'));
		}	
	}

}

/* End of file pengaturan.php */
/* Location: ./application/controllers/pengaturan.php */