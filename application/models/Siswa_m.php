<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_m extends CI_Model
{

    public function Totalkelas()
    {

        $this->db->count_all_results('');
        $this->db->FROM('kelas_siswa');
        $this->db->where('NISN = ',$this->session->userdata('username'));
        return $this->db->count_all_results();


    }

    public function TotalMateri()
    {

        $this->db->count_all_results('kelas_siswa');
        $this->db->FROM('mapel, kelas_mapel, kelas_siswa, materi');
        $this->db->where('kelas_mapel.id_kelas_mapel = materi.id_kelas_mapel
                          AND materi.id_kelas_mapel = kelas_siswa.id_kelas_mapel
                          AND kelas_mapel.id_mapel = mapel.id_mapel
                          AND kelas_siswa.NISN =', $this->session->userdata('username'));
        return $this->db->count_all_results();


    }

    public function SampleData()
    {
      $this->db->limit(3);
      $this->db->from('mapel, guru, siswa, kelas_siswa');
      $this->db->join('kelas_mapel', 'kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.NIP = guru.NIP');
      $this->db->where('kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.id_kelas_mapel = kelas_siswa.id_kelas_mapel AND siswa.NISN = kelas_siswa.NISN AND kelas_siswa.NISN =', $this->session->userdata('username'));
      return $this->db->get('')->result_array();
    }

    public function SampleMateri()
    {
      $this->db->limit(3);
      $this->db->from('mapel, kelas_mapel, kelas_siswa, materi');
      $this->db->where('kelas_mapel.id_kelas_mapel = materi.id_kelas_mapel AND materi.id_kelas_mapel = kelas_siswa.id_kelas_mapel AND kelas_mapel.id_mapel = mapel.id_mapel AND kelas_siswa.NISN =', $this->session->userdata('username'));
      return $this->db->get('')->result_array();
    }

    public function proses_tambah_kelas()
    {
      $data = [
        "NISN" => $this->input->post('NISN', true),
        "id_kelas_mapel" => $this->input->post('id_kelas_mapel', true),
      ];

      $this->db->insert('kelas_siswa', $data);
    }



    public function ambil_id($id_kelas_mapel)
    {
        return $this->db->get_where('kelas_mapel', ['id_kelas_mapel' => $id_kelas_mapel])->row_array();
    }

    public function ambil_id_materi($id_materi)
    {
        return $this->db->get_where('materi', ['id_materi' => $id_materi])->row_array();
    }

    public function ambil_id_kelas_siswa($id_kelas_siswa)
    {
      $this->db->select('*');
      $this->db->from('mapel, guru, siswa');
      $this->db->join('kelas_mapel', 'kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.NIP = guru.NIP');
      $this->db->where('kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.id_kelas_mapel = kelas_siswa.id_kelas_mapel  AND siswa.NISN = kelas_siswa.NISN AND kelas_siswa.NISN =', $this->session->userdata('username'));
      return $this->db->get_where('kelas_siswa', ['id_kelas_siswa' => $id_kelas_siswa])->row_array();
    }

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
        "NISN" => $this->input->post('NISN'),
        "nama_siswa" => $this->input->post('nama_siswa'),
        "nohp" => $this->input->post('nohp'),
        "gender" => $this->input->post('gender'),
        "jurusan" => $this->input->post('jurusan'),

      ];

      $this->db->where('id_siswa', $this->input->post('id_siswa'));
       $this->db->update('siswa' , $data);



    }

    public function proses_edit_user()
    { $data= [
      "username" => $this->input->post('username'),
      "password" => $this->input->post('password'),

    ];

    $this->db->where('id_user', $this->input->post('id_user'));
     $this->db->update('user' , $data);
    }

    public function hapus_data($id_kelas_siswa)
    {
        $this->db->where('id_kelas_siswa' ,$id_kelas_siswa);
        $this->db->delete('kelas_siswa');
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

    public function kelas_siswa()
    {
      $this->db->select('*');
      $this->db->from('mapel, guru, siswa, kelas_siswa');
      $this->db->join('kelas_mapel', 'kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.NIP = guru.NIP');
      $this->db->where('kelas_mapel.id_mapel = mapel.id_mapel AND kelas_mapel.id_kelas_mapel = kelas_siswa.id_kelas_mapel AND siswa.NISN = kelas_siswa.NISN AND kelas_siswa.NISN =', $this->session->userdata('username'));
      return $this->db->get('');
    	// $this->db->where('kelas_mapel.NIP', $this->session->userdata('username'));
    	// return $this->db->get('kelas_mapel')->result();
    }
    public function profil_siswa()
    {
      $this->db->select('*');
      $this->db->from('siswa');
      $this->db->join('user', 'siswa.NISN = user.username');
      $this->db->where('siswa.NISN =', $this->session->userdata('username'));
      return $this->db->get('')->result_array();

      $this->db->from('user');
      $this->db->where('user.username = ',$this->session->userdata('username'));
      return $this->db->get('')->result_array();

    }

    public function Materi_siswa()
    {
      $this->db->select('*');
      $this->db->from('mapel, kelas_mapel, kelas_siswa, materi');
      $this->db->where('kelas_mapel.id_kelas_mapel = materi.id_kelas_mapel
                        AND materi.id_kelas_mapel = kelas_siswa.id_kelas_mapel
                        AND kelas_mapel.id_mapel = mapel.id_mapel
                        AND kelas_siswa.NISN =', $this->session->userdata('username'));
      return $this->db->get('')->result_array();
    }

    public function Materi_detail($id_kelas_siswa)
    {
      $this->db->select('*');
      $this->db->from('mapel, guru, siswa, materi');
      $this->db->join('kelas_mapel', 'kelas_mapel.id_mapel = mapel.id_mapel
                        AND kelas_mapel.NIP = guru.NIP
                        AND materi.id_kelas_mapel = kelas_mapel.id_kelas_mapel');
      $this->db->where('kelas_mapel.id_mapel = mapel.id_mapel
                        AND kelas_mapel.id_kelas_mapel = kelas_siswa.id_kelas_mapel
                        AND materi.id_kelas_mapel = kelas_mapel.id_kelas_mapel
                        AND siswa.NISN = kelas_siswa.NISN
                        AND kelas_siswa.NISN =', $this->session->userdata('username'));
      return $this->db->get_where('kelas_siswa', ['id_kelas_siswa' => $id_kelas_siswa])->result_array();
    }

}
