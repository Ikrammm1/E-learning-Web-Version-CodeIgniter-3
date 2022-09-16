<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

	public function index()
	{


		$data['title'] = 'Selamat datang Guru!!';
		$this->load->model("Guru_m");
		$data['guru'] = $this->Guru_m->profil_guru();
		$data['total'] = $this->Guru_m->Totalkelas();
		$data['totalmateri'] = $this->Guru_m->TotalMateri();

		// $data['count'] = $this->Guru_m->countkelas();
		// var_dump($data['guru']);
		$data['kelas_guru'] = $this->Guru_m->SampleData();
		$data['materi_guru'] = $this->Guru_m->SampleMateri();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/guru/sidebar');
		$this->load->view('templates/guru/topbar', $data);
		$this->load->view('templates/guru/dashboard_guru', $data);
		$this->load->view('templates/footer');
	}
	public function profil_guru()
	{
		$data['title'] = 'Profile';
		$this->load->model("Guru_m");
		$data['guru'] = $this->Guru_m->profil_guru();
		// var_dump($data['guru']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/guru/sidebar');
		$this->load->view('templates/guru/topbar', $data);
		$this->load->view('templates/guru/profile_guru', $data);
		$this->load->view('templates/footer');
	}

	public function update_profile()
	{
		$data['title'] = 'Edit Profile';
		$this->load->model("Guru_m");
		$data['guru'] = $this->Guru_m->profil_guru();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/guru/sidebar');
		$this->load->view('templates/guru/topbar', $data);
		$this->load->view('templates/guru/edit_profile', $data);
		$this->load->view('templates/footer');
	}

	public function daftar_siswa()
	{
		$data['title'] = 'Data Siswa';
		$this->load->model("M_siswa");
		$data['siswa'] = $this->M_siswa->SemuaData();
		$this->load->model("Guru_m");
		$data['guru'] = $this->Guru_m->profil_guru();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/guru/topbar', $data);
		$this->load->view('templates/admin/siswa/list_siswa', $data);
		$this->load->view('templates/footer');
	}

	public function daftar_materi()
	{
		$data['title'] = 'List Materi';
		$this->load->model('Guru_m');
		$data['materi'] = $this->Guru_m->Materi_guru();
		$data['guru'] = $this->Guru_m->profil_guru();
		// var_dump($data['materi']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/guru/sidebar');
		$this->load->view('templates/guru/topbar', $data);
		$this->load->view('templates/guru/materi/list_materi', $data);
		$this->load->view('templates/footer');
	}

	// public function daftar_tugas()
	// {
	// 	$data['title'] = 'Data Tugas';
	// 	$this->load->model('Guru_m');
	// 	$data['materi'] = $this->Guru_m->Tugas_Materi_guru();
	// 	// var_dump($data['materi']);
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/guru/sidebar');
	// 	$this->load->view('templates/guru/topbar', $data);
	// 	$this->load->view('templates/guru/materi/list_materi', $data);
	// 	$this->load->view('templates/footer');
	// }

	public function daftar_kelas()
	{
		$data['title'] = 'List Kelas';
		$this->load->model("Guru_m");
		$data['kelas_guru'] = $this->Guru_m->kelas_guru()->result_array();
		$data['guru'] = $this->Guru_m->profil_guru();
		// var_dump($data['kelas_guru']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/guru/sidebar');
		$this->load->view('templates/guru/topbar', $data);
		$this->load->view('templates/guru/kelas/list_kelas_guru', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_materi()
{
	$data['title'] = 'Tambah Materi';
	$this->load->model("Guru_m");
	$data['tambah_materi'] = $this->Guru_m->Materi_guru();
	$data['referen_mapel'] = $this->Guru_m->kelas_guru()->result_array();
	$data['guru'] = $this->Guru_m->profil_guru();
	$this->load->view('templates/header', $data);
	$this->load->view('templates/guru/sidebar');
	$this->load->view('templates/guru/topbar', $data);
	$this->load->view('templates/guru/materi/tambah_materi', $data);
	$this->load->view('templates/footer');
}


	public function proses_tambah_materi()
	{
		$judul					= $this->input->post('judul', true);
		$konten					= $this->input->post('konten', true);
		$id_kelas_mapel = $this->input->post('id_kelas_mapel', true);
		$file 					= $_FILES['file'];
		if ($file=''){}else {
			$config['upload_path']			='./assets/materi';
			$config['allowed_types']			= 'pdf|doc|docx|pptx|xlsx|png|jpg';

			$this->load->Library('upload', $config);
			if (!$this->upload->do_upload('file')) {
				$file=$this->upload->data('file_name');
			} else {
				$file=$this->upload->data('file_name');
			}
		}
		$data = array(
			'judul' =>$judul ,
			'file' => $file,
			'konten' => $konten,
			'id_kelas_mapel' =>$id_kelas_mapel
		);
		$this->db->insert('materi', $data);
		$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
			 Data baru berhasil Ditambahkan!
			</div>');
		redirect('Guru/daftar_materi');
	}



	public function edit_data($id_kelas_mapel)
	{
		$data['title'] = 'Edit Kelas Mata Pelajaran';
    $this->load->model("Guru_m");
		$data['guru'] = $this->Guru_m->profil_guru();
		$data['id_kelas'] = $this->Guru_m->ambil_id($id_kelas_mapel);
		// var_dump($data['id_kelas']);
		$data['kelas_guru'] = $this->Guru_m->kelas_guru()->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/Guru/sidebar');
		$this->load->view('templates/guru/topbar', $data);
		$this->load->view('templates/guru/kelas/edit_kelas_guru', $data);
		$this->load->view('templates/footer');
	}

public function edit_materi($id_materi)
{
	$data['title'] = 'Edit Materi';
	$this->load->model("Guru_m");
	$data['guru'] = $this->Guru_m->profil_guru();
	$data['id_materi'] = $this->Guru_m->ambil_id_materi($id_materi);
	// var_dump($data['id_materi']);
	$this->load->view('templates/header',$data);
	$this->load->view('templates/Guru/sidebar');
	$this->load->view('templates/guru/topbar', $data);
	$this->load->view('templates/guru/materi/edit_materi', $data);
	$this->load->view('templates/footer');
}



	public function proses_edit_data()
	{
		$this->load->model("Guru_m");
		$data['kelas'] = $this->Guru_m->proses_edit_data($id_mapel);
			$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
				 Data berhasil Dirubah!
				</div>');
			redirect('Guru/daftar_kelas');
		}

		public function proses_edit_materi()
		{
			$this->load->model("Guru_m");
			$data['materi_guru'] = $this->Guru_m->proses_edit_materi($id_materi);
				$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
					 Data berhasil Dirubah!
					</div>');
				redirect('Guru/daftar_materi');
			}

			public function proses_edit_profile()
			{
				$this->load->model("Guru_m");
				$data['edit_profile'] = $this->Guru_m->proses_edit_profile();
				$data['edit_user'] = $this->Guru_m->proses_edit_user();
					$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
						 Data berhasil Dirubah!
						</div>');
					redirect('Guru/profil_guru');
			}

			public function detail_materi($id_materi)
			{

				$data['title'] = 'Detail Materi';
				$this->load->model("Guru_m");
				$data['guru'] = $this->Guru_m->profil_guru();
				$data['id_materi'] = $this->Guru_m->ambil_id_materi($id_materi);
				$data['materi'] = $this->Guru_m->Materi_guru();
				// $data['guru'] = $this->Guru_m->profil_guru();
				// var_dump($data['id_materi']);
				$this->load->view('templates/header',$data);
				$this->load->view('templates/Guru/sidebar');
				$this->load->view('templates/guru/topbar', $data);
				$this->load->view('templates/guru/materi/detail_materi', $data);
				$this->load->view('templates/footer');
			}

			public function detail_kelas($id_kelas_mapel)
			{
				$data['title'] = 'Detail Mata Pelajaran';
				$this->load->model("Guru_m");
				$data['guru'] = $this->Guru_m->profil_guru();
				$data['id_kelas'] = $this->Guru_m->ambil_id($id_kelas_mapel);
				$data['materi'] = $this->Guru_m->Materi_detail($id_kelas_mapel);
				// var_dump($data['id_kelas']);
				$data['kelas_guru'] = $this->Guru_m->kelas_guru()->result_array();
				$this->load->view('templates/header',$data);
				$this->load->view('templates/Guru/sidebar');
				$this->load->view('templates/guru/topbar', $data);
				$this->load->view('templates/guru/kelas/detail_kelas_guru', $data);
				$this->load->view('templates/footer');
			}


			public function hapus_data($id_materi)
			{

				$this->load->model("Guru_m");
				$data = $this->Guru_m->file_name($id_materi)->row();
				// var_dump($data);
				$this->Guru_m->hapus_data($id_materi);
				$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
					 Data berhasil Dihapus!
					</div>');
				redirect('Guru/daftar_materi');


			}
		}
