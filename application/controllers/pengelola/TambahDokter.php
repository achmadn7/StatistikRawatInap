<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahDokter extends CI_Controller {


	public function index()
	{
		$this->load->view('pengelola/tambah-dokter');
	}
}
