<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasienMasuk extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('mod_pasien_masuk');
	}

	public function index()
	{
		if ($this->session->userdata('level') == 'perawat')
		{
			$data['record']= $this->mod_pasien_masuk->select_all()->result();
			$this->load->view('perawat/pasien-masuk',$data);
		}
		else
		{
			redirect('home');
		}
	}

	function post()
	{
			if (isset($_POST['submit'])) {
					$this->mod_pasien_masuk->save();
					redirect('perawat/pasien-masuk');
			}else {
				$data['ruang']= $this->mod_pasien_masuk->select_ruang()->result();
				$data['kelas']= $this->mod_pasien_masuk->select_kelas()->result();
				$this->load->view('perawat/tambah-pmasuk',$data);
			}
	}


}
