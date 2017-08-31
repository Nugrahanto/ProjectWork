<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {

	public function get_data_nilai()
	{
		return $this->db->order_by('nama_siswa','ASC')
						->order_by('kelas','ASC')
						->get('tb_nilai')					
						->result();
	}

}

/* End of file nilai_model.php */
/* Location: ./application/models/nilai_model.php */