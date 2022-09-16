<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mapel extends CI_Model
{
    public function SemuaData()
    {
        $this->db->from('mapel');
        $this->db->order_by('mapel.semester', 'asc');
        return $this->db->get('')->result_array();
    }

    public function TotalMapel()
    {
        $sql = "SELECT COUNT(id_mapel) AS id_mapel FROM `mapel`";
        $result = $this->db->query($sql);
        return $result->row()->id_mapel;


    }

    public function proses_tambah_data()
    {
    	$data = [
        "code" => $this->input->post('code', true),
    		"nama_mapel" => $this->input->post('nama_mapel', true),
    		"keterangan" => $this->input->post('keterangan', true),
        "semester" => $this->input->post('semester', true),
    	];

    	$this->db->insert('mapel', $data);
    }

    public function hapus_data($id_mapel)
    {
        $this->db->where('id_mapel' ,$id_mapel);
        $this->db->delete('mapel');
    }

    public function ambil_id($id_mapel)
    {
        return $this->db->get_where('mapel', ['id_mapel' => $id_mapel])->row_array();
    }

    public function proses_edit_data()
    {
        $data = [
          "id_mapel" => $this->input->post('id_mapel'),
          "code" => $this->input->post('code'),
      		"nama_mapel" => $this->input->post('nama_mapel'),
      		"keterangan" => $this->input->post('keterangan'),
          "semester" => $this->input->post('semester'),
        ];

        $this->db->where('id_mapel', $this->input->post('id_mapel'));
         $this->db->update('mapel' , $data);
    }
}
