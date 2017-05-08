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


}
