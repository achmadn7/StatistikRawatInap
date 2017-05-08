<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('mod_user');
	}

	public function index()
	{
		$this->load->view('home');
	}

	function validasi()
	{
		$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
				);

			$cek = $this->mod_user->login($data);
			if ($cek->num_rows() == 1)
			{
				foreach ($cek->result() as $sess)
				{
					$sess_data['logged_in'] = 'Sudah Login';
					$sess_data['username']	= $sess->username;
					$sess_data['level'] 	  = $sess->level;
          $this->session->set_userdata($sess_data);
				}

				if ($this->session->userdata('level') == 'pengelola')
				{
					redirect('pengelola/dashboard');
				}
				elseif ($this->session->userdata('level') == 'perawat')
				{
					redirect('perawat/dashboard');
				}
				elseif ($this->session->userdata('level') == 'rekam medis')
				{
					redirect('rm/dashboard');
				}
				elseif ($this->session->userdata('level') == 'pimpinan')
				{
					redirect('pimpinan/dashboard');
				}
			}
			else
			{
				echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
			}
	}

	function logout()
  {
			session_destroy();
			echo " <script>alert('Berhasil logout!');history.go(-1);</script>";
			redirect('home');
	}

}
