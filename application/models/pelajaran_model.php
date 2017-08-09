<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran_model extends CI_Model {

	public function insert_pelajaran()
	{
		$data = array(
			'kode_pelajaran'	=> $this->input->post('kode_pelajaran'),
			'mata_pelajaran'	=> $this->input->post('mata_pelajaran'),
			'lama_jam'			=> $this->input->post('lama_jam'),
			'keterangan'		=> $this->input->post('keterangan'),
			'tingkat'			=> $this->input->post('tingkat')
		);
		$this->db->insert('tb_pelajaran', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else
			return FALSE;
	}

	public function get_data_pelajaran()
	{
		return $this->db->order_by('kode_pelajaran','ASC')
						->get('tb_pelajaran')					
						->result();
	}

}

/* End of file pelajaran_model.php */
/* Location: ./application/models/pelajaran_model.php */