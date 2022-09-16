<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_mapel extends CI_Controller
{


	public function daftar_mapel()
	{
		$data['title'] = 'Halaman Data Mata Pelajaran';
		$this->load->model("M_mapel");
		$data['mapel'] = $this->M_mapel->SemuaData();
		$data['total'] = $this->M_mapel->TotalMapel();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/mapel/list_mapel', $data);
		$this->load->view('templates/footer');
	}


		public function tambah_data()
	{
		$data['title'] = 'Halaman Tambah Mata Pelajaran';
    $this->load->model("M_mapel");
		$data['mapel'] = $this->M_mapel->SemuaData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/mapel/tambah_mapel', $data);
		$this->load->view('templates/footer');
	}

	public function proses_tambah_data()
	{
    $this->load->model("M_mapel");
    $data['mapel'] = $this->M_mapel->proses_tambah_data();
		$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
			 Data baru berhasil Ditambahkan!
			</div>');
		redirect('C_mapel/daftar_mapel');
	}

	public function hapus_data($id_mapel)
	{
    $this->load->model("M_mapel");
		$this->M_mapel->hapus_data($id_mapel);
		$this->session->set_flashdata('pesan' , '<div class="alert alert-danger" role="alert">
			 Data berhasil Dihapus!
			</div>');
		redirect('C_mapel/daftar_mapel');
	}

	public function edit_data($id_mapel)
	{
		$data['title'] = 'Halaman Edit Mata Pelajaran';
    $this->load->model("M_mapel");
		$data['mapel'] = $this->M_mapel->ambil_id($id_mapel);
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/mapel/edit_mapel', $data);
		$this->load->view('templates/footer');
	}

	public function proses_edit_data()
	{
		$this->load->model("M_mapel");
		$data['mapel'] = $this->M_mapel->proses_edit_data($id_mapel);
			$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
				 Data berhasil Dirubah!
				</div>');
			redirect('C_mapel/daftar_mapel');
		}
}
