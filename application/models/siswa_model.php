<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function insert_siswa()
	{
		$data = array(
			'nis'			=> $this->input->post('nis'),
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
		$this->db->insert('tb_siswa', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else
			return FALSE;
	}

	public function get_data_siswaXRPL()
	{
		$x = "X";
		$rpl = "RPL";
		return $this->db->where('tingkat = "'.$x.'"')
						->where('jurusan = "'.$rpl.'"')
						->order_by('kelas','ASC')
						->get('tb_siswa')
						->result();		
	}

	public function get_data_siswaXTKJ()
	{
		$x = "X";
		$tkj = "TKJ";
		return $this->db->where('tingkat = "'.$x.'"')
						->where('jurusan = "'.$tkj.'"')
						->order_by('kelas','ASC')
						->get('tb_siswa')
						->result();		
	}

	public function get_data_siswaXIRPL()
	{
		$xi = "XI";
		$rpl = "RPL";
		return $this->db->where('tingkat = "'.$xi.'"')
						->where('jurusan = "'.$rpl.'"')
						->order_by('kelas','ASC')
						->get('tb_siswa')
						->result();		
	}

	public function get_data_siswaXITKJ()
	{
		$xi = "XI";
		$tkj = "TKJ";
		return $this->db->where('tingkat = "'.$xi.'"')
						->where('jurusan = "'.$tkj.'"')
						->order_by('kelas','ASC')
						->get('tb_siswa')
						->result();		
	}

	public function get_data_siswaXIIRPL()
	{
		$xii = "XII";
		$rpl = "RPL";
		return $this->db->where('tingkat = "'.$xii.'"')
						->where('jurusan = "'.$rpl.'"')
						->order_by('kelas','ASC')
						->get('tb_siswa')
						->result();		
	}

	public function get_data_siswaXIITKJ()
	{
		$xii = "XII";
		$tkj = "TKJ";
		return $this->db->where('tingkat = "'.$xii.'"')
						->where('jurusan = "'.$tkj.'"')
						->order_by('kelas','ASC')
						->get('tb_siswa')
						->result();		
	}

}

/* End of file siswa_model.php */
/* Location: ./application/models/siswa_model.php */