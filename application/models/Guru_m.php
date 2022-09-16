<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_m extends CI_Model
{
 
    public function Totalkelas()
    {

        $this->db->count_all_results('');
        $this->db->FROM('kelas_mapel');
        $this->db->where('kelas_mapel.NIP =', $this->session->userdata('username'));
        return $this->db->count_all_results();


    }
    public function TotalMateri()
    {
      // $sql = "SELECT COUNT(`materi`.`id_materi` ) as `total_materi` FROM `materi`
      // JOIN `kelas_mapel` ON `materi`.`id_kelas_mapel` = `kelas_mapel`.`id_kelas_mapel`
      // WHERE `materi`.`id_kelas_mapel` = `kelas_mapel`.`id_kelas_mapel` AND `kelas_mapel`.`NIP` = 'guru'";
      // $result = $this->db->query($sql);
      // return $result->row()->total_materi;

      $this->db->count_all_results('');
      $this->db->FROM('kelas_mapel, materi');
      $this->db->where('materi.id_kelas_mapel = kelas_mapel.id_kelas_mapel
                        AND kelas_mapel.NIP =', $this->session->userdata('username'));
      return $this->db->count_all_results();

    }


    public function SampleData()
    {

        // $this->db->where('id_guru <5');
        $this->db->limit(5);
        $this->db->from('mapel, guru');
        $this->db->join('kelas_mapel', 'kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.NIP = guru.NIP');
        $this->db->where('kelas_mapel.id_mapel = mapel.id_mapel AND guru.NIP = kelas_mapel.NIP AND kelas_mapel.NIP =', $this->session->userdata('username'));
        return $this->db->get('')->result_array();
    }

    public function SampleMateri()
    {
      $this->db->limit(5);
      $this->db->from('mapel, kelas_mapel, materi');
      $this->db->where('kelas_mapel.id_kelas_mapel = materi.id_kelas_mapel AND kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.NIP =', $this->session->userdata('username'));
      return $this->db->get('')->result_array();
    }

    public function proses_tambah_materi()
    {
      $data = [
        "judul" => $this->input->post('judul', true),
        "file" => $this->input->post('file', true),
        "konten" => $this->input->post('konten', true),
        "id_kelas_mapel" => $this->input->post('id_kelas_mapel', true),
      ];

      $this->db->insert('materi', $data);
    }



    public function ambil_id($id_kelas_mapel)
    {
      $this->db->select('*');
      $this->db->from('mapel, guru');
      $this->db->where('kelas_mapel.id_mapel = mapel.id_mapel AND guru.NIP = kelas_mapel.NIP AND kelas_mapel.NIP =', $this->session->userdata('username'));
        return $this->db->get_where('kelas_mapel', ['id_kelas_mapel' => $id_kelas_mapel])->row_array();
    }

    public function ambil_id_materi($id_materi)
    {
        return $this->db->get_where('materi', ['id_materi' => $id_materi])->row_array();
    }

    public function ambil_id_kelas($id_kelas_mapel)
    {
        return $this->db->get_where('kelas_mapel', ['id_kelas_mapel' => $id_kelas_mapel])->row_array();
    }

    // public function ambil_id_guru($id_guru)
    // {
    //     return $this->db->get_where('guru', ['id_guru' => $id_guru])->row_array();
    // }
    //
    // public function ambil_id_user($id_user)
    // {
    //     return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
    // }


    public function proses_edit_data()
    {
      $data = [
        "id_kelas_mapel" => $this->input->post('id_kelas_mapel'),
        "token" => $this->input->post('token'),

      ];

      $this->db->where('id_kelas_mapel', $this->input->post('id_kelas_mapel'));
       $this->db->update('kelas_mapel' , $data);
    }

    public function proses_edit_materi()
    {
      $data = [
        "id_materi" => $this->input->post('id_materi'),
        "judul" => $this->input->post('judul'),
        "file" => $this->input->post('file'),
        "konten" => $this->input->post('konten'),


      ];

      $this->db->where('id_materi', $this->input->post('id_materi'));
       $this->db->update('materi' , $data);
    }

    public function proses_edit_profile()
    {
      $data = [
        "NIP" => $this->input->post('NIP'),
        "nama" => $this->input->post('nama'),
        "nohp" => $this->input->post('nohp'),
        "gender" => $this->input->post('gender'),

      ];

      $this->db->where('id_guru', $this->input->post('id_guru'));
       $this->db->update('guru' , $data);



    }

    public function proses_edit_user()
    { $data= [
      "username" => $this->input->post('username'),
      "password" => $this->input->post('password'),

    ];

    $this->db->where('id_user', $this->input->post('id_user'));
     $this->db->update('user' , $data);
    }


    public function tampildata()
    {
      $this->db->select('*');
      $this->db->from('mapel, guru');
      $this->db->join('kelas_mapel', 'kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.NIP = guru.NIP');
      $this->db->where('kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.NIP = guru.NIP');
      return $this->db->get('');
    }

    public function datamapel()
    {
      $data = [
        "id_mapel" => $this->input->post('id_mapel'),
        "code" => $this->input->post('code'),
    		"kelas" => $this->input->post('kelas'),
    		"nama_mapel" => $this->input->post('nama_mapel'),
        "semester" => $this->input->post('semester'),
        // "nama" => $this->input->post('nama', true),
    	];

      $this->db->like('code');
      $this->db->order_by('code', 'ASC');
      return $this->db->get('mapel')->result_array();
    }

    public function kelas_guru()
    {
      $this->db->select('*');
      $this->db->from('mapel, guru');
      $this->db->join('kelas_mapel', 'kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.NIP = guru.NIP');
      $this->db->where('kelas_mapel.id_mapel = mapel.id_mapel AND guru.NIP = kelas_mapel.NIP AND kelas_mapel.NIP =', $this->session->userdata('username'));
      return $this->db->get('');
    	// $this->db->where('kelas_mapel.NIP', $this->session->userdata('username'));
    	// return $this->db->get('kelas_mapel')->result();
    }
    public function profil_guru()
    {
      $this->db->select('*');
      $this->db->from('guru');
      $this->db->join('user', 'guru.NIP = user.username');
      $this->db->where('guru.NIP =', $this->session->userdata('username'));
      return $this->db->get('')->result_array();

      $this->db->from('user');
      $this->db->where('user.username = ',$this->session->userdata('username'));
      return $this->db->get('')->result_array();

    }

    public function Materi_guru()
    {
      $this->db->select('*');
      $this->db->from('mapel, kelas_mapel, materi');
      $this->db->where('kelas_mapel.id_kelas_mapel = materi.id_kelas_mapel
                        AND kelas_mapel.id_mapel = mapel.id_mapel
                        AND kelas_mapel.NIP =', $this->session->userdata('username'));
      return $this->db->get('')->result_array();
    }

    public function Materi_detail($id_kelas_mapel)
    {
      $this->db->select('*');
      $this->db->from('mapel, guru, materi');
      $this->db->where('kelas_mapel.id_mapel = mapel.id_mapel
                        AND kelas_mapel.NIP = guru.NIP`
                        AND  materi.id_kelas_mapel = kelas_mapel.id_kelas_mapel
                        AND kelas_mapel.NIP =', $this->session->userdata('username'));
      return $this->db->get_where('kelas_mapel', ['kelas_mapel.id_kelas_mapel' => $id_kelas_mapel])->result_array();
    }


    public function hapus_data($id_materi)
    {
        $this->db->where('id_materi' ,$id_materi);
        $this->db->delete('materi');
    }
    public function file_name($id_materi)
    {
      // $this->db->select('file');
      $this->db->where('id_materi', $id_materi);
      return $this->db->get('materi');
    }

}
