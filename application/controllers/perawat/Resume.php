<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {


	public function index()
	{
		if ($this->session->userdata('level') == 'perawat')
		{
			$this->load->view('perawat/resume');
		}
		else
		{
			redirect('home');
		}
	}
}
