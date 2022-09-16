<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kelas extends CI_Controller
{


	public function daftar_kelas()
	{
		$data['title'] = 'Daftar Kelas';
		$this->load->model("M_kelas");
		$data['kelas'] = $this->M_kelas->tampildata()->result_array();
    $data['total_k'] = $this->M_kelas->Totalkelas();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/kelas/list_kelas', $data);
		$this->load->view('templates/footer');
	}


		public function tambah_data()
	{
		$data['title'] = 'Halaman Tambah Mata Pelajaran';
		$this->load->model("M_kelas");
		$this->load->model("M_guru");
		$data['kelas'] = $this->M_kelas->tampildata()->result_array();
		$data['datamapel'] = $this->M_kelas->datamapel();
		$data['dataguru'] = $this->M_guru->SemuaData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/kelas/tambah_kelas', $data);
		$this->load->view('templates/footer');
	}

	public function proses_tambah_data()
	{
    $this->load->model("M_kelas");
    $data['kelas'] = $this->M_kelas->proses_tambah_data();
		$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
			 Data baru berhasil Ditambahkan!
			</div>');
		redirect('C_kelas/daftar_kelas');
	}

	public function hapus_data($id_kelas_mapel)
	{
    $this->load->model("M_kelas");
		$this->M_kelas->hapus_data($id_kelas_mapel);
		$this->session->set_flashdata('pesan' , '<div class="alert alert-danger" role="alert">
			 Data berhasil Dihapus!
			</div>');
		redirect('C_kelas/daftar_kelas');
	}

	public function edit_data($id_kelas_mapel)
	{
		$data['title'] = 'Halaman Edit Kelas Mata Pelajaran';
    $this->load->model("M_kelas");
		$data['id_kelas'] = $this->M_kelas->ambil_id($id_kelas_mapel);

		$data['kelas'] = $this->M_kelas->tampildata()->result_array();
		var_dump($data['id_kelas']);
		$data['datamapel'] = $this->M_kelas->datamapel();
		$data['dataguru'] = $this->M_kelas->dataguru();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/admin/kelas/edit_kelas', $data);
		$this->load->view('templates/footer');
	}

	public function proses_edit_data()
	{
		$this->load->model("M_kelas");
		$data['kelas'] = $this->M_kelas->proses_edit_data($id_kelas_mapel);
			$this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
				 Data berhasil Dirubah!
				</div>');
			redirect('C_kelas/daftar_kelas');
		}
}
