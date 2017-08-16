<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function cek(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('nip',$username)
						  ->where('no_telp',$password)
						  ->get('tb_karyawan');

		if ($query->num_rows()>0) {
			$data = array(
				'nip' => $username,
				'logged_in' => TRUE,
				'nip_karyawan' => $query->row()->nip,
				'nama' => $query->row()->nama_karyawan,
				'status' => $query->row()->status
				);
			$this->session->set_userdata($data);
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */