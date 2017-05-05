<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('mod_kelas');
	}

	public function index()
	{
		$data['record']= $this->mod_kelas->select_all()->result();
		$this->load->view('pengelola/kelas',$data);
	}
}
