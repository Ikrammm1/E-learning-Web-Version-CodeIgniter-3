<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$data['title'] = 'Selamat datang Admin!!';
		$this->load->model("M_guru");
		$data['guru'] = $this->M_guru->SampleData();
		$data['total'] = $this->M_guru->TotalGuru();
		$this->load->model("M_siswa");
		$data['siswa'] = $this->M_siswa->SampleData();
		$data['total_s'] = $this->M_siswa->TotalSiswa();
		$this->load->model("M_kelas");
		$data['kelas'] = $this->M_kelas->tampildata()->result_array();
    $data['total_k'] = $this->M_kelas->Totalkelas();
		$this->load->model("M_mapel");
		$data['mapel'] = $this->M_mapel->SemuaData();
    $data['total_m'] = $this->M_mapel->TotalMapel();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/dashboard_admin', $data);
		$this->load->view('templates/footer');
	}

	public function daftar_siswa()
	{
		$data['title'] = 'Halaman Data Siswa';
		$this->load->model("M_siswa");
		$data['siswa'] = $this->M_siswa->SemuaData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/siswa/list_siswa', $data);
		$this->load->view('templates/footer');
	}

	// public function daftar_mapel()
	// {
	// 	$data['title'] = 'Halaman Data Mapel';
	// 	$data['mahasiswa'] = $this->M_mahasiswa->SemuaData();
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('templates/topbar');
	// 	$this->load->view('templates/admin/mapel/list_mapel', $data);
	// 	$this->load->view('templates/footer');
	// }

	// public function daftar_kelas()
	// {
	// 	$data['title'] = 'Halaman Data Kelas';
	// 	$data['mahasiswa'] = $this->M_mahasiswa->SemuaData();
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('templates/topbar');
	// 	$this->load->view('templates/admin/kelas/list_kelas', $data);
	// 	$this->load->view('templates/footer');
	// }

	// public function tambah_data()
	// {
	// 	$data['title'] = 'Halaman Tambah Mahasiswa';
	// 	$data['mahasiswa'] = $this->M_mahasiswa->SemuaData();
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('templates/topbar');
	// 	$this->load->view('home/tambah_data', $data);
	// 	$this->load->view('templates/footer');
	// }

	// public function proses_tambah_data()
	// {
	// 	$this->M_mahasiswa->proses_tambah_data();
	// 	$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
	// 		 Data baru berhasil Ditambahkan!
	// 		</div>');
	// 	redirect('Home');
	// }
	//
	// public function hapus_data($id)
	// {
	// 	$this->M_mahasiswa->hapus_data($id);
	// 	$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
	// 		 Data berhasil Dihapus!
	// 		</div>');
	// 	redirect('Home');
	// }
	//
	// public function edit_data($id)
	// {
	// 	$data['title'] = 'Halaman Edit Mahasiswa';
	// 	$data['mahasiswa'] = $this->M_mahasiswa->ambil_id_mahasiswa($id);
	// 	$this->load->view('templates/header',$data);
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('templates/topbar');
	// 	$this->load->view('home/edit_data', $data);
	// 	$this->load->view('templates/footer');
	// }
	//
	// public function proses_edit_data($id)
	// {
	// 	$this->M_mahasiswa->proses_edit_data($id);
	// 	$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
	// 		 Data berhasil Diedit!
	// 		</div>');
	// 	redirect('Home');
	// }
}
