<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Guru extends CI_Controller
{


	public function daftar_guru()
	{
		$data['title'] = 'Halaman Data Guru';
		$this->load->model("M_guru");
		$data['guru'] = $this->M_guru->SemuaData();
		$data['total'] = $this->M_guru->TotalGuru();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/guru/list_guru', $data);
		$this->load->view('templates/footer');
	}


		public function tambah_data()
	{
		$data['title'] = 'Halaman Tambah Guru';
    $this->load->model("M_guru");
		$data['guru'] = $this->M_guru->SemuaData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/guru/tambah_guru', $data);
		$this->load->view('templates/footer');
	}

	public function proses_tambah_data()
	{
    $this->load->model("M_guru");
    $data['guru'] = $this->M_guru->proses_tambah_data();
		$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
			 Data baru berhasil Ditambahkan!
			</div>');
		redirect('C_guru/daftar_guru');
	}

	public function hapus_data($id_guru)
	{
    $this->load->model("M_guru");
		$this->M_guru->hapus_data($id_guru);
		$this->session->set_flashdata('pesan' , '<div class="alert alert-danger" role="alert">
			 Data berhasil Dihapus!
			</div>');
		redirect('C_guru/daftar_guru');
	}

	public function edit_data($id_guru)
	{
		$data['title'] = 'Halaman Edit Guru';
    $this->load->model("M_guru");
		$data['guru'] = $this->M_guru->ambil_id($id_guru);
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/guru/edit_guru', $data);
		$this->load->view('templates/footer');
	}

	public function proses_edit_data()
	{
		$this->load->model("M_guru");
		$data['guru'] = $this->M_guru->proses_edit_data($id_guru);
			$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
				 Data berhasil Dirubah!
				</div>');
			redirect('C_guru/daftar_guru');
		}
}
