<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelas extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('kelas_mapel')->result_array();
    }

    public function Totalkelas()
    {
        $sql = "SELECT COUNT(id_kelas_mapel) AS id_kelas_mapel FROM `kelas_mapel`";
        $result = $this->db->query($sql);
        return $result->row()->id_kelas_mapel;


    }

    public function proses_tambah_data()
    {
    	$data = [
        "id_mapel" => $this->input->post('id_mapel', true),
    		"kelas" => $this->input->post('kelas', true),
    		// "id_guru" => $this->input->post('id_guru', true),
        "NIP" => $this->input->post('NIP', true),
        "gambar" => $this->input->post('gambar', true),
    	];

    	$this->db->insert('kelas_mapel', $data);
    }

    public function hapus_data($id_kelas_mapel)
    {
        $this->db->where('id_kelas_mapel' ,$id_kelas_mapel);
        $this->db->delete('kelas_mapel');
    }

    public function ambil_id($id_kelas_mapel)
    {
        return $this->db->get_where('kelas_mapel', ['id_kelas_mapel' => $id_kelas_mapel])->row_array();
    }

    public function proses_edit_data()
    {
        $data = [
          "id_kelas_mapel" => $this->input->post('id_kelas_mapel'),
          "id_mapel" => $this->input->post('id_mapel'),
          "kelas" => $this->input->post('kelas'),
          "NIP" => $this->input->post('NIP'),
        ];

        $this->db->where('id_kelas_mapel', $this->input->post('id_kelas_mapel'));
         $this->db->update('kelas_mapel' , $data);
    }

    public function tampildata()
    {
      $this->db->select('*');
      $this->db->from('mapel, guru');
      $this->db->join('kelas_mapel', 'kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.NIP = guru.NIP');
      $this->db->where('kelas_mapel.id_mapel = mapel.id_mapel AND guru.NIP = kelas_mapel.NIP');
      $this->db->order_by('kelas_mapel.id_kelas_mapel', 'desc');
      return $this->db->get('');
    }

    public function datamapel()
    {
      $data = [
        "id_mapel" => $this->input->post('id_mapel', true),
        "code" => $this->input->post('code', true),
    		"kelas" => $this->input->post('kelas', true),
    		"nama_mapel" => $this->input->post('nama_mapel', true),
        "semester" => $this->input->post('semester', true),
        "nama" => $this->input->post('nama', true),
    	];

      $this->db->like('code');
      $this->db->order_by('code', 'ASC');
      return $this->db->get('mapel')->result_array();
    }

    public function dataguru()

      {
          $data = [
              "NIP" => $this->input->post('NIP', true),
              "nama" => $this->input->post('nama', true),
              "nohp" => $this->input->post('nohp', true),
              "gender" => $this->input->post('gender', true)
          ];
          $this->db->like('nama');
          $this->db->order_by('nama', 'ASC');
          return $this->db->get('guru')->result_array();
    }


}
