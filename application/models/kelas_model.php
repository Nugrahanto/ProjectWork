<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {

	public function insert_kelas()
	{
		$data = array(
			'kode_kelas'				=> $this->input->post('kode_kelas'),
			'tingkat_kelas'				=> $this->input->post('tingkat_kelas'),
			'nama_kelas'				=> $this->input->post('nama_kelas'),
			'penanggung_jawab_kelas'	=> $this->input->post('penanggung_jawab'),
			'jumlah_siswa'				=> $this->input->post('jumlah_siswa'),
			'keterangan'				=> NULL
		);
		$this->db->insert('tb_kelas', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else
			return FALSE;
	}

	public function get_data_kelasX()
	{
		$x = "X";
		return $this->db->where('tingkat_kelas = "'.$x.'"')
						->order_by('nama_kelas','ASC')
						->get('tb_kelas')
						->result();
		// return $this->db->query("SELECT * FROM tb_kelas WHERE tingkat_kelas = '".$x."'")
		// 				->result();				
	}

	public function get_data_kelasXI()
	{
		$xi = "XI";
		return $this->db->where('tingkat_kelas = "'.$xi.'"')
						->order_by('nama_kelas','ASC')
						->get('tb_kelas')
						->result();				
	}

	public function get_data_kelasXII()
	{
		$xii = "XII";
		return $this->db->where('tingkat_kelas = "'.$xii.'"')
						->order_by('nama_kelas','ASC')
						->get('tb_kelas')
						->result();
	}

}

/* End of file kelas_model.php */
/* Location: ./application/models/kelas_model.php */