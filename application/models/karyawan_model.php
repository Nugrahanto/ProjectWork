<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model {

	public function insert_karyawan()
	{
		$data = array(
			'kode_karyawan'		=> $this->input->post('kode_karyawan'),
			'nip'				=> $this->input->post('nip'),
			'nama_karyawan'		=> $this->input->post('nama_karyawan'),
			'tempat_lahir'		=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'		=> $this->input->post('tanggal_lahir'),
			'jenis_kelamin'		=> $this->input->post('jenis_kelamin'),
			'alamat_karyawan'	=> $this->input->post('alamat_karyawan'),
			'no_telp'			=> $this->input->post('no_telp'),
			'status'			=> $this->input->post('status'),
			'mapel1'			=> $this->input->post('mapel1'),
			'mapel2'			=> $this->input->post('mapel2')
		);
		$this->db->insert('tb_karyawan', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else
			return FALSE;
	}

	public function get_data_karyawan()
	{
		return $this->db->order_by('kode_karyawan','ASC')
						->get('tb_karyawan')						
						->result();
	}

	public function update_karyawan($kode_karyawan)
	{
		$data = array(
			'kode_karyawan'		=> $this->input->post('kode_karyawan'),
			'nip'				=> $this->input->post('nip'),
			'nama_karyawan'		=> $this->input->post('nama_karyawan'),
			'tempat_lahir'		=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'		=> $this->input->post('tanggal_lahir'),
			'jenis_kelamin'		=> $this->input->post('jenis_kelamin'),
			'alamat_karyawan'	=> $this->input->post('alamat_karyawan'),
			'no_telp'			=> $this->input->post('no_telp'),
			'status'			=> $this->input->post('status'),
			'mapel1'			=> $this->input->post('mapel1'),
			'mapel2'			=> $this->input->post('mapel2')
		);
		
		$this->db->where('kode_karyawan', $kode_karyawan)
	  	     	 ->update('tb_karyawan', $data);

	  	     	 //
	  	    if ($this->db->affected_rows() > 0) {
	  	    	return TRUE;
	  	    }else{
	  	    	return FALSE;
	  	    }
	}

	public function delete_karyawan($kode_karyawan){
		return $this->db->where('kode_karyawan', $kode_karyawan)
						->delete('tb_karyawan');


		if($this->db->affected_rows()>0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($kode_karyawan){
		$this->db->where("kode_karyawan",$kode_karyawan)
				 ->delete("tb_karyawan");
	}

}

/* End of file karyawan.php */
/* Location: ./application/models/karyawan.php */