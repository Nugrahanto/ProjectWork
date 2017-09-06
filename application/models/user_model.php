<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function cek(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('nis',$username)
						  ->where('no_telp',$password)
						  ->get('tb_siswa');

		if ($query->num_rows()>0) {
			$data = array(
				'nis' => $username,
				'siswa_logged_in' => TRUE,
				'nis_siswa' 	=> $query->row()->nis,
				'nama' 			=> $query->row()->nama_siswa,
				'kelas' 		=> $query->row()->kelas,
				'jenis_kelamin' => $query->row()->jenis_kelamin,
				'agama'			=> $query->row()->agama,
				'tempat_lahir' 	=> $query->row()->tempat_lahir,
				'tanggal_lahir' => $query->row()->tanggal_lahir,
				'alamat'		=> $query->row()->alamat,
				'no_telp_siswa'	=> $query->row()->no_telp,
				'foto'			=> $query->row()->foto
				);
			$this->session->set_userdata($data);
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	// public function detail_data_siswa($nis){
	// 	return $this->db->where('nis', $nis)
	// 			 		->get('tb_siswa')
	// 			 		->row();

	// }

	public function edit_data_siswa($nis)
	{
		$data = array(
			'nama_siswa'	=> $this->input->post('nama_siswa'),
			'tingkat'		=> $this->input->post('tingkat'),
			'jurusan'		=> $this->input->post('jurusan'),
			'kelas'			=> $this->input->post('kelas'),
			'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
			'agama'			=> $this->input->post('agama'),
			'tempat_lahir'	=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'	=> $this->input->post('tanggal_lahir'),
			'alamat'		=> $this->input->post('alamat'),
			'no_telp'		=> $this->input->post('no_telp'),
			'angkatan'		=> $this->input->post('angkatan')
		);
		
		$this->db->where('nis', $nis)
	  	     	 ->update('tb_siswa', $data);

	  	     	 //
	  	    if ($this->db->affected_rows() > 0) {
	  	    	return TRUE;
	  	    }else{
	  	    	return FALSE;
	  	    }
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */