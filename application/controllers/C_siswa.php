<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_siswa extends CI_Controller
{


	public function daftar_siswa()
	{
		$data['title'] = 'Halaman Data Siswa';
		$this->load->model("M_siswa");
		$data['siswa'] = $this->M_siswa->SemuaData();
		$data['total'] = $this->M_siswa->Totalsiswa();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/siswa/list_siswa', $data);
		$this->load->view('templates/footer');
	}


		public function tambah_data()
	{
		$data['title'] = 'Halaman Tambah siswa';
    $this->load->model("M_siswa");
		$data['siswa'] = $this->M_siswa->SemuaData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/siswa/tambah_siswa', $data);
		$this->load->view('templates/footer');
	}

	public function proses_tambah_data()
	{
    $this->load->model("M_siswa");
    $data['siswa'] = $this->M_siswa->proses_tambah_data();
		$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
			 Data baru berhasil Ditambahkan!
			</div>');
		redirect('C_siswa/daftar_siswa');
	}

	public function hapus_data($NISN)
	{
    $this->load->model("M_siswa");
		$this->M_siswa->hapus_data($NISN);
		$this->session->set_flashdata('pesan' , '<div class="alert alert-danger" role="alert">
			 Data berhasil Dihapus!
			</div>');
		redirect('C_siswa/daftar_siswa');
	}

	public function edit_data($NISN)
	{
		$data['title'] = 'Halaman Edit siswa';
    $this->load->model("M_siswa");
		$data['siswa'] = $this->M_siswa->ambil_id($NISN);
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/siswa/edit_siswa', $data);
		$this->load->view('templates/footer');
	}

	public function proses_edit_data()
	{
		$this->load->model("M_siswa");
		$data['siswa'] = $this->M_siswa->proses_edit_data($NISN);
			$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
				 Data berhasil Dirubah!
				</div>');
			redirect('C_siswa/daftar_siswa');
		}
}
