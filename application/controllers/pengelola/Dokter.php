<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('mod_dokter');
	}

	public function index()
	{
		$data['record']= $this->mod_dokter->select_all()->result();
		$this->load->view('pengelola/dokter',$data);
	}
}
