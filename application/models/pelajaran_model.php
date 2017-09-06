<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran_model extends CI_Model {

	public function insert_pelajaran()
	{
		$data = array(
			'kode_pelajaran'	=> $this->input->post('kode_pelajaran'),
			'mata_pelajaran'	=> $this->input->post('mata_pelajaran'),
			'lama_jam'			=> $this->input->post('lama_jam'),
			'keterangan'		=> $this->input->post('keterangan')
		);
		$this->db->insert('tb_pelajaran', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else
			return FALSE;
	}

	public function get_data_pelajaran()
	{
		return $this->db->order_by('keterangan','ASC')
						->order_by('kode_pelajaran','ASC')
						->get('tb_pelajaran')					
						->result();
	}

	public function update_pelajaran($kode_pelajaran)
	{
		$data = array(
			'kode_pelajaran'	=> $this->input->post('kode_pelajaran'),
			'mata_pelajaran'	=> $this->input->post('mata_pelajaran'),
			'lama_jam'			=> $this->input->post('lama_jam'),
			'keterangan'		=> $this->input->post('keterangan')
		);
		
		$this->db->where('kode_pelajaran', $kode_pelajaran)
	  	     	 ->update('tb_pelajaran', $data);

	  	     	 //
	  	    if ($this->db->affected_rows() > 0) {
	  	    	return TRUE;
	  	    }else{
	  	    	return FALSE;
	  	    }
	}

	public function delete_pelajaran($kode_pelajaran){
		return $this->db->where('kode_pelajaran', $kode_pelajaran)
						->delete('tb_pelajaran');


		if($this->db->affected_rows()>0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($kode_pelajaran){
		$this->db->where("kode_pelajaran",$kode_pelajaran)
				 ->delete("tb_pelajaran");
	}

}

/* End of file pelajaran_model.php */
/* Location: ./application/models/pelajaran_model.php */