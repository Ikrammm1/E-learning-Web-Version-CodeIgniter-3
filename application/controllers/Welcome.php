<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct(){

		parent:: __construct();

		$this->load->model('M_login');
	}
	public function index()
	{
		// $data['aksi'] = $this->M_login->login_aksi();
		$this->load->view('Loginnew');


	}
	public function login_aksi(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$level = $this->input->post('level');


		//validasi
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');

		if ($this->form_validation->run() == true) {
			$user = $this->M_login->get_username($this->input->post('username'));
			if (!$user) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> user tidak terdaftar</div>');
				redirect(base_url(''));

			}elseif ($this->input->post('password') != $user->password) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Password salah</div>');
				redirect(base_url(''));

			}elseif ($this->input->post('level') != $user->level) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> tidak dapat di akses</div>');
				redirect(base_url(''));

			}  else {
				$session = array(
					'username' => $user->username,
					'level' => $user->level,
				) ;
				$this->session->set_userdata($session);
				if($level == 'admin'){
					redirect(base_url('Home'));
				} elseif ($level == 'guru') {

					redirect(base_url('Guru'));
				} elseif ($level == 'siswa') {
					redirect(base_url('Siswa'));
				} else {
					redirect(base_url(''));
				}

			}
		}else {
			redirect(base_url(''));
		}
}

// 	public function logout(){
// 		$this->session->session_destroy();
// 		redirect(base_url('Welcome'));
// 	}






}
?>
