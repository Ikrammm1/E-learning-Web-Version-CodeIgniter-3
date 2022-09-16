<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_guru extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('guru')->result_array();
    }

    public function TotalGuru()
    {
        $sql = "SELECT COUNT(id_guru) AS id_guru FROM `guru`";
        $result = $this->db->query($sql);
        return $result->row()->id_guru;


    }

    public function SampleData()
    {

        $this->db->limit(5);
        $this->db->from('guru');
        return $this->db->get('')->result_array();
    }

    public function proses_tambah_data()
    {
    	$data = [
    		"NIP" => $this->input->post('NIP', true),
    		"nama" => $this->input->post('nama', true),
    		"nohp" => $this->input->post('nohp', true),
        "gender" => $this->input->post('gender', true),
    	];

    	$this->db->insert('guru', $data);
    }

    public function hapus_data($id_guru)
    {
        $this->db->where('id_guru' ,$id_guru);
        $this->db->delete('guru');
    }

    public function ambil_id($id_guru)
    {
        return $this->db->get_where('guru', ['id_guru' => $id_guru])->row_array();
    }

    public function proses_edit_data()
    {
        $data = [
            "NIP" => $this->input->post('NIP'),
            "nama" => $this->input->post('nama'),
            "nohp" => $this->input->post('nohp'),
            "gender" => $this->input->post('gender')
        ];

        $this->db->where('id_guru', $this->input->post('id_guru'));
         $this->db->update('guru' , $data);
    }
}
