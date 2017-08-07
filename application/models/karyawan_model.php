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

	public function get_data_guru()
	{
		$guru = "Guru";
		return $this->db->where('status = "'.$guru.'"')
						->order_by('kode_karyawan','ASC')
						->get('tb_karyawan')						
						->result();
	}

	public function get_data_tu()
	{
		$tu = "Tata Usaha";
		return $this->db->where('status = "'.$tu.'"')
						->order_by('kode_karyawan','ASC')
						->get('tb_karyawan')
						->result();
	}

	public function get_data_kesiswaan()
	{
		$ks = "Kesiswaan";
		return $this->db->where('status = "'.$ks.'"')
						->order_by('kode_karyawan','ASC')
						->get('tb_karyawan ')
						->result();
	}

	public function detail_data_karyawan($kode_karyawan){
		return $this->db->where('kode_karyawan', $kode_karyawan)
				 		->get('tb_karyawan')
				 		->row();

	}

	public function edit_data_karyawan($kode_karyawan)
	{
		$data = array(
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

}

/* End of file karyawan.php */
/* Location: ./application/models/karyawan.php */