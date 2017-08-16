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

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */