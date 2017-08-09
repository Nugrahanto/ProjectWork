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

	public function get_data_siswa()
	{
		return $this->db->order_by('kelas','ASC')
						->order_by('nama_siswa','ASC')
						->get('tb_siswa')
						->result();		
	}

	public function get_data_siswaX()
	{
		$x = "X";
		return $this->db->where('tingkat = "'.$x.'"')
						->order_by('kelas','ASC')
						->order_by('nama_siswa','ASC')
						->get('tb_siswa')
						->result();		
	}

	public function get_data_siswaXI()
	{
		$xi = "XI";
		return $this->db->where('tingkat = "'.$xi.'"')
						->order_by('kelas','ASC')
						->order_by('nama_siswa','ASC')
						->get('tb_siswa')
						->result();		
	}

	public function get_data_siswaXII()
	{
		$xii = "XII";
		return $this->db->where('tingkat = "'.$xii.'"')
						->order_by('kelas','ASC')
						->order_by('nama_siswa','ASC')
						->get('tb_siswa')
						->result();		
	}

	public function detail_data_siswa($nis){
		return $this->db->where('nis', $nis)
				 		->get('tb_siswa')
				 		->row();

	}

	public function edit_data_siswa($nis)
	{
		$data = array(
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
		
		$this->db->where('nis', $nis)
	  	     	 ->update('tb_siswa', $data);

	  	     	 //
	  	    if ($this->db->affected_rows() > 0) {
	  	    	return TRUE;
	  	    }else{
	  	    	return FALSE;
	  	    }
	}

	function uploadData()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['nis'] 				= $csv_line[0];//remove if you want to have primary key,
                $insert_csv['nama_siswa'] 		= $csv_line[1];
                $insert_csv['tingkat'] 			= $csv_line[2];
                $insert_csv['jurusan'] 			= $csv_line[3];
                $insert_csv['kelas']			= $csv_line[4];
                $insert_csv['jenis_kelamin'] 	= $csv_line[5];
                $insert_csv['agama'] 			= $csv_line[6];
                $insert_csv['tempat_lahir'] 	= $csv_line[7];
                $insert_csv['tanggal_lahir']	= $csv_line[8];
                $insert_csv['alamat'] 			= $csv_line[9];
                $insert_csv['no_telp'] 			= $csv_line[10];
                $insert_csv['angkatan'] 		= $csv_line[11];


            }
            $i++;
            $data = array(
                'nis' 			=> $insert_csv['nis'] ,
                'nama_siswa' 	=> $insert_csv['nama_siswa'],
                'tingkat' 		=> $insert_csv['tingkat'],
                'jurusan' 		=> $insert_csv['jurusan'],
                'kelas' 		=> $insert_csv['kelas'],
                'jenis_kelamin' => $insert_csv['jenis_kelamin'],
                'agama' 		=> $insert_csv['agama'],
                'tempat_lahir' 	=> $insert_csv['tempat_lahir'],
                'tanggal_lahir' => $insert_csv['tanggal_lahir'],
                'alamat' 		=> $insert_csv['alamat'],
                'no_telp' 		=> $insert_csv['no_telp'],
                'angkatan' 		=> $insert_csv['angkatan']
                );
            $data['crane_features']=$this->db->insert('tb_siswa', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

}

/* End of file siswa_model.php */
/* Location: ./application/models/siswa_model.php */