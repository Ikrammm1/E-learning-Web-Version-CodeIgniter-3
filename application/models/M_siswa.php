<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function TotalSiswa()
    {
        $sql = "SELECT COUNT(NISN) AS NISN FROM `siswa`";
        $result = $this->db->query($sql);
        return $result->row()->NISN;


    }

    public function SampleData()
    {
      $this->db->limit(5);
      $this->db->from('siswa');
      return $this->db->get('')->result_array();
    }

    public function proses_tambah_data()
    {
    	$data = [
    		"NISN" => $this->input->post('NISN', true),
    		"nama_siswa" => $this->input->post('nama_siswa', true),
    		"nohp" => $this->input->post('nohp', true),
        "gender" => $this->input->post('gender', true),
        "jurusan" => $this->input->post('jurusan', true),
    	];

    	$this->db->insert('siswa', $data);
    }

    public function hapus_data($NISN)
    {
        $this->db->where('NISN' ,$NISN);
        $this->db->delete('siswa');
    }

    public function ambil_id($NISN)
    {
        return $this->db->get_where('siswa', ['NISN' => $NISN])->row_array();
    }

    public function proses_edit_data()
    {
        $data = [
            "NISN" => $this->input->post('NISN'),
            "nama_siswa" => $this->input->post('nama_siswa'),
            "nohp" => $this->input->post('nohp'),
            "gender" => $this->input->post('gender'),
            "jurusan" => $this->input->post('jurusan')
        ];

        $this->db->where('NISN', $this->input->post('NISN'));
         $this->db->update('siswa' , $data);
    }
}
