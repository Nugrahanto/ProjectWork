<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catatan_model extends CI_Model {

	public function insert_row_catatan()
	{
		$data = array(
			'id_catatan'	=> NULL,
			'nis'			=> $this->input->post('nama_siswa'),
			'catatan'		=> '-'
		);
		$this->db->insert('tb_catatan', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else
			return FALSE;
	}

	public function get_data_catatan()
	{
		return $this->db->order_by('kelas','ASC')
						->join('tb_siswa','tb_siswa.nis = tb_catatan.nis')
						->get('tb_catatan')					
						->result();
	}

	public function update_catatan($id,$value,$modul)
	{
		$this->db->where(array("id_catatan"=>$id));
		$this->db->update("tb_catatan",array($modul=>$value));
	}

	public function delete($id_catatan)
	{
		$this->db->where("id_catatan",$id_catatan)
				 ->delete("tb_catatan");
	}

}

/* End of file catatan_model.php */
/* Location: ./application/models/catatan_model.php */