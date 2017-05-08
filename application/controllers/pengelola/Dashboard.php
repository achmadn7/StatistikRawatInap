<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		if ($this->session->userdata('level') == 'pengelola')
		{
			$this->load->view('pengelola/dashboard');
		}
		else
		{
			redirect('home');
		}
	}

}
