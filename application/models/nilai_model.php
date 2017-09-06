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

	// public function get_data_nilai()
	// {
	// 	return $this->db->order_by('nama_siswa','ASC')
	// 					->order_by('kelas','ASC')
	// 					->get('tb_nilai')					
	// 					->result_array();
	// }

	public function update_nilai($id,$value,$modul)
	{
		$this->db->where(array("id_nilai"=>$id));
		$this->db->update("tb_nilai",array($modul=>$value));
	}

}

/* End of file nilai_model.php */
/* Location: ./application/models/nilai_model.php */