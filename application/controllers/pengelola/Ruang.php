<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {


	public function index()
	{
		$this->load->view('pengelola/ruang');
	}
}
