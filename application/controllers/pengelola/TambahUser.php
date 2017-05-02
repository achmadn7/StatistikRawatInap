<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahUser extends CI_Controller {


	public function index()
	{
		$this->load->view('pengelola/tambah-user');
	}
}
