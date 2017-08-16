<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('siswa_model');
	}

	public function index()
	{	
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'daftar_siswa';
			$data['siswa'] = $this->siswa_model->get_data_siswa();
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	public function kelas_10()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'daftar_siswa_X';
			$data['X'] = $this->siswa_model->get_data_siswaX();
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	public function kelas_11()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'daftar_siswa_XI';
			$data['XI'] = $this->siswa_model->get_data_siswaXI();
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	public function kelas_12()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'daftar_siswa_XII';
			$data['XII'] = $this->siswa_model->get_data_siswaXII();
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	public function simpan_siswa()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('tingkat', 'Tingkat', 'trim|required');
				$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
				$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
				$this->form_validation->set_rules('nis', 'NIS', 'trim|required');
				$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
				$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Siswa', 'trim|required');
				$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Siswa', 'trim|required');
				$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
				$this->form_validation->set_rules('agama', 'Agama Siswa', 'trim|required');
				$this->form_validation->set_rules('alamat', 'Alamat Siswa', 'trim|required');
				$this->form_validation->set_rules('no_telp', 'Nomor Telp', 'trim|required');
				$this->form_validation->set_rules('angkatan', 'Angkatan', 'trim|required');

				if ($this->form_validation->run() == TRUE) {		

					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']  = '10000';
					
					$this->load->library('upload', $config);

					if ($this->upload->do_upload('foto')){

						if ($this->siswa_model->insert_siswa($this->upload->data()) == TRUE) {
							$data['notif_sukses'] = 'Berhasil Menambah Data!';
							$data['main_view'] = 'daftar_siswa';
							$data['siswa'] = $this->siswa_model->get_data_siswa();
							$this->load->view('template', $data);

						} else {
							$data['notif_gagal'] = 'GAGAL Menambah Data!';
							$data['main_view'] = 'daftar_siswa';
							$data['siswa'] = $this->siswa_model->get_data_siswa();
							$this->load->view('template', $data);
						}
					} else{
						$data['notif'] = $this->upload->display_errors(); //validation default mengeluarkan kalimat salah
						$data['main_view'] = 'daftar_siswa';
						$data['siswa'] = $this->siswa_model->get_data_siswa();
						$this->load->view('template', $data);
					}
				} else {
					$data['notif_gagal'] = validation_errors();
					$data['main_view'] = 'daftar_siswa';
					$data['siswa'] = $this->siswa_model->get_data_siswa();
					$this->load->view('template', $data);
				}
			} else {
				$data['notif_gagal'] = validation_errors();
				$data['main_view'] = 'daftar_siswa';
				$data['siswa'] = $this->siswa_model->get_data_siswa();
				$this->load->view('template', $data);
			}
		} 
		else{
		}
	}

	public function edit_siswa()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$data['main_view'] = 'edit_siswa';
					
			$nis = $this->uri->segment(3) . "/" . $this->uri->segment(4);

			//
			$data['edit_siswa'] = $this->siswa_model->detail_data_siswa($nis);
			//mengload template dan data
			$this->load->view('template', $data);	
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	public function do_edit_siswa()
	{
		if($this->session->userdata('logged_in') == TRUE)
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

				if ($this->form_validation->run() == TRUE) {
					
					$nis = $this->uri->segment(3) . "/" . $this->uri->segment(4);

					if ($this->siswa_model->edit_data_siswa($nis) == TRUE) {
						$data['notif_sukses'] = 'Edit Sukses';
						$data['edit_siswa'] = $this->siswa_model->detail_data_siswa($nis);
						$data['main_view'] = 'edit_siswa';
						$this->load->view('template', $data);
					}
					else{
						$data['notif_gagal'] = 'Edit Gagal!';
						$data['edit_siswa'] = $this->siswa_model->detail_data_siswa($nis);
						$data['main_view'] = 'edit_siswa';
						$this->load->view('template', $data);
					}
				} else {
					$data['notif_gagal'] = validation_errors();
					$data['edit_siswa'] = $this->siswa_model->detail_data_siswa($nis);
					$data['main_view'] = 'edit_siswa';
					$this->load->view('template', $data);
				}
			}
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}

	public function tambah_siswa_grosir()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$this->siswa_model->uploadData();
			$data['main_view'] = 'tambah_siswa';
			$this->load->view('template', $data);
		} 
		else{
			redirect(base_url('index.php/admins'));
		}
	}
}

/* End of file siswa.php */
/* Location: ./application/controllers/siswa.php */