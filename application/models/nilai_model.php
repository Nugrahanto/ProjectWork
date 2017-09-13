<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {

	public function insert_row_nilai()
	{
		$data = array(
			'id_nilai'		=> NULL,
			'nis'			=> $this->input->post('nis'),
			'kode_pelajaran'=> $this->input->post('mata_pelajaran'),
			'uh1'			=> '0',
			'uh2'			=> '0',
			'uh3'			=> '0',
			'uh4'			=> '0',
			'uh5'			=> '0',
			'uts1'			=> '0',
			'uts2'			=> '0',
			'uas1'			=> '0',
			'uas2'			=> '0'
		);

		$this->db->insert('tb_nilai2', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}else
			return FALSE;
	}

	// public function insert_row_nilai()
	// {
	// 	$data = array(
	// 		'id_nilai'		=> NULL,
	// 		'nis'	=> $this->input->post('nis'),
	// 		'nama_siswa'	=> $this->input->post('nama_siswa'),
	// 		'kelas'			=> $this->input->post('kelas'),
	// 		'mata_pelajaran'=> $this->input->post('mata_pelajaran'),
	// 		'uh1'			=> '0',
	// 	);

	// 	if($data['mata_pelajaran']=="Fisika"){
	// 		$this->db->insert('tb_fisika', $data);
	// 	}elseif ($data['mata_pelajaran']=="Matematika") {
	// 		$this->db->insert('tb_matematika', $data);
	// 	}

	// 	if ($this->db->affected_rows() > 0) {
	// 		return TRUE;
	// 	}else
	// 		return FALSE;
	// }

	public function get_data_nilai()
	{
		return $this->db->order_by('mata_pelajaran','ASC')
						->order_by('kelas','ASC')
						->order_by('nama_siswa','ASC')
						->join('tb_pelajaran','tb_pelajaran.kode_pelajaran = tb_nilai2.kode_pelajaran')
						->join('tb_siswa','tb_siswa.nis = tb_nilai2.nis')
						->get('tb_nilai2')					
						->result();
	}

	// public function get_data_nilai_matematika()
	// {
	// 	return $this->db->order_by('kelas','ASC')
	// 					->order_by('nama_siswa','ASC')
	// 					->get('tb_matematika')					
	// 					->result();
	// }
	// public function get_data_nilai_fisika()
	// {
	// 	return $this->db->order_by('kelas','ASC')
	// 					->order_by('nama_siswa','ASC')
	// 					->get('tb_fisika')					
	// 					->result();
	// }

	// public function update_nilai_matematika($id,$value,$modul)
	// {
	// 	$this->db->where(array("id_nilai"=>$id));
	// 	$this->db->update("tb_matematika",array($modul=>$value));
	// }

	// public function update_nilai_fisika($id,$value,$modul)
	// {
	// 	$this->db->where(array("id_nilai"=>$id));
	// 	$this->db->update("tb_fisika",array($modul=>$value));
	// }

	public function update_nilai($id,$value,$modul)
	{
		$this->db->where(array("id_nilai"=>$id));
		$this->db->update("tb_nilai2",array($modul=>$value));
	}

	// public function delete_matematika($id_nilai)
	// {
	// 	$this->db->where("id_nilai",$id_nilai)
	// 			 ->delete("tb_matematika");
	// }

	// public function delete_fisika($id_nilai)
	// {
	// 	$this->db->where("id_nilai",$id_nilai)
	// 			 ->delete("tb_fisika");
	// }

	public function delete($id_nilai)
	{
		$this->db->where("id_nilai",$id_nilai)
				 ->delete("tb_nilai2");
	}

}

/* End of file nilai_model.php */
/* Location: ./application/models/nilai_model.php */