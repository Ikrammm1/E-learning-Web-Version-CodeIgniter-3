<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{ 

	public function index()
	{


		$data['title'] = 'Selamat datang siswa!!';
		$this->load->model("Siswa_m");
		$data['siswa'] = $this->Siswa_m->profil_siswa();
		$data['total'] = $this->Siswa_m->Totalkelas();
		$data['totalmateri'] = $this->Siswa_m->TotalMateri();
		$data['kelas_siswa'] = $this->Siswa_m->SampleData();
		$data['materi_sample'] = $this->Siswa_m->SampleMateri();
		// $data['kelas_siswa'] = $this->Siswa_m->kelas_siswa()->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/siswa/sidebar');
		$this->load->view('templates/siswa/topbar', $data);
		$this->load->view('templates/siswa/dashboard_siswa', $data);
		$this->load->view('templates/footer');
	}

	public function daftar_siswa()
	{
		$data['title'] = 'Data Siswa';
		$this->load->model("M_siswa");
		$data['siswa'] = $this->M_siswa->SemuaData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/siswa/sidebar');
		$this->load->view('templates/siswa/topbar', $data);
		$this->load->view('templates/admin/siswa/list_siswa', $data);
		$this->load->view('templates/footer');
	}

	public function daftar_materi()
	{
		$data['title'] = 'Data Materi';
		$this->load->model('Siswa_m');
		$data['siswa'] = $this->Siswa_m->profil_siswa();
		$data['materi'] = $this->Siswa_m->Materi_siswa();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/siswa/sidebar');
		$this->load->view('templates/siswa/topbar', $data);
		$this->load->view('templates/siswa/materi/list_materi_siswa', $data);
		$this->load->view('templates/footer');
	}

	// public function daftar_tugas()
	// {
	// 	$data['title'] = 'Data Tugas';
	// 	$this->load->model('Siswa_m');
	// 	$data['materi'] = $this->Siswa_m->Tugas_Materi_guru();
	// 	// var_dump($data['materi']);
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/guru/sidebar');
	// 	$this->load->view('templates/siswa/topbar', $data);
	// 	$this->load->view('templates/guru/materi/list_materi', $data);
	// 	$this->load->view('templates/footer');
	// }

	public function daftar_kelas()
	{
		$data['title'] = 'List Kelas';
		$this->load->model("Siswa_m");
		$data['siswa'] = $this->Siswa_m->profil_siswa();
		$data['kelas_siswa'] = $this->Siswa_m->kelas_siswa()->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/siswa/sidebar');
		$this->load->view('templates/siswa/topbar', $data);
		$this->load->view('templates/siswa/kelas/list_kelas_siswa', $data);
		$this->load->view('templates/footer');
	}

  public function daftar_kelas_full()
	{
		$data['title'] = 'Daftar Kelas';
		$this->load->model("M_kelas");
		$data['kelas'] = $this->M_kelas->tampildata()->result_array();
		$this->load->model("Siswa_m");
		$data['siswa'] = $this->Siswa_m->profil_siswa();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/siswa/sidebar');
		$this->load->view('templates/siswa/topbar', $data);
		$this->load->view('templates/siswa/kelas/daftar_kelas', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_kelas()
{
	$data['title'] = 'Tambah Materi';
	$this->load->model("Guru_m");
	$data['tambah_kelas'] = $this->Guru_m->Materi_guru();
	$this->load->model("Siswa_m");
	$data['siswa'] = $this->Siswa_m->profil_siswa();
	$this->load->view('templates/header', $data);
	$this->load->view('templates/siswa/sidebar');
	$this->load->view('templates/siswa/topbar', $data);
	$this->load->view('templates/siswa/kelas/tambah_kelas_siswa', $data);
	$this->load->view('templates/footer');

}

	public function tambah_data($id_kelas_mapel)
	{
		$data['title'] = 'Edit Kelas Mata Pelajaran';
		$this->load->model("Siswa_m");
		$data['siswa'] = $this->Siswa_m->profil_siswa();
		$data['id_kelas'] = $this->Siswa_m->ambil_id($id_kelas_mapel);
		$this->load->view('templates/header',$data);
		$this->load->view('templates/siswa/sidebar');
		$this->load->view('templates/siswa/topbar', $data);
		$this->load->view('templates/siswa/kelas/tambah_kelas_siswa', $data);
		$this->load->view('templates/footer');
	}

	public function proses_tambah_kelas()
	{
		$this->load->model("Siswa_m");
		$this->Siswa_m->proses_tambah_kelas();
		$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
			 Data baru berhasil Ditambahkan!
			</div>');
		redirect('Siswa/daftar_kelas');
	}

	public function proses_edit_data()
	{
		$this->load->model("Siswa_m");
		$data['kelas'] = $this->Siswa_m->proses_tambah_kelas($id_mapel);
			$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
				 Data berhasil Dirubah!
				</div>');
			redirect('Guru/daftar_kelas');
		}

		public function hapus_data($id_kelas_siswa)
		{
	    $this->load->model("Siswa_m");
			$this->Siswa_m->hapus_data($id_kelas_siswa);
			$this->session->set_flashdata('pesan' , '<div class="alert alert-danger" role="alert">
				 Data berhasil Dihapus!
				</div>');
			redirect('Siswa/daftar_kelas');
		}

				public function detail_materi($id_materi)
			{

				$data['title'] = 'Detail Materi';
				$this->load->model("Siswa_m");
				$data['id_materi'] = $this->Siswa_m->ambil_id_materi($id_materi);
				$data['materi'] = $this->Siswa_m->Materi_siswa();
				// var_dump($data['id_materi']);
				$data['siswa'] = $this->Siswa_m->profil_siswa();
				$this->load->view('templates/header',$data);
				$this->load->view('templates/siswa/sidebar');
				$this->load->view('templates/siswa/topbar', $data);
				$this->load->view('templates/siswa/materi/detail_materi', $data);
				$this->load->view('templates/footer');
			}

			public function detail_kelas($id_kelas_siswa)
		{

			$data['title'] = 'Detail Kelas';
			$this->load->model("Siswa_m");
			$data['id_materi'] = $this->Siswa_m->ambil_id_kelas_siswa($id_kelas_siswa);
			$data['materi'] = $this->Siswa_m->Materi_detail($id_kelas_siswa);
			$data['siswa'] = $this->Siswa_m->profil_siswa();
			$this->load->view('templates/header',$data);
			$this->load->view('templates/siswa/sidebar');
			$this->load->view('templates/siswa/topbar', $data);
			$this->load->view('templates/siswa/kelas/detail_kelas', $data);
			$this->load->view('templates/footer');
		}

		public function profil_siswa()
		{
			$data['title'] = 'Profile';
			$this->load->model("Siswa_m");
			$data['siswa'] = $this->Siswa_m->profil_siswa();
			$this->load->view('templates/header',$data);
			$this->load->view('templates/siswa/sidebar');
			$this->load->view('templates/siswa/topbar', $data);
			$this->load->view('templates/siswa/profile_siswa', $data);
			$this->load->view('templates/footer');
		}

		public function update_profile()
		{
			$data['title'] = 'Edit Profile';
			$this->load->model("Siswa_m");
			$data['siswa'] = $this->Siswa_m->profil_siswa();
			$this->load->view('templates/header',$data);
			$this->load->view('templates/siswa/sidebar');
			$this->load->view('templates/siswa/topbar', $data);
			$this->load->view('templates/siswa/edit_profile', $data);
			$this->load->view('templates/footer');
		}

		public function proses_edit_profile()
		{
			$this->load->model("Siswa_m");
			$data['edit_profile'] = $this->Siswa_m->proses_edit_profile();
			$data['edit_user'] = $this->Siswa_m->proses_edit_user();
				$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
					 Data berhasil Dirubah!
					</div>');
				redirect('Siswa/profil_siswa');
		}

}
