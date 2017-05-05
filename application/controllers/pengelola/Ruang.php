<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('mod_ruang');
	}

	public function index()
	{
		$data['record']= $this->mod_ruang->select_all()->result();
		$this->load->view('pengelola/ruang',$data);
	}
}
