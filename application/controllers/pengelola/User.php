<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('mod_user');
	}

	public function index()
	{
		{
			if ($this->session->userdata('level') == 'pengelola')
			$data['record']= $this->mod_user->select_all()->result();
			$this->load->view('pengelola/user',$data);
		}
		else
		{
			redirect('home');
		}
	}

	function post()
	{
		if ($this->session->userdata('level') == 'pengelola') {
				if (isset($_POST['submit'])) {
						$this->mod_user->save();
						redirect('pengelola/user');
				}else {
					$this->load->view('pengelola/tambah-user');
				}
		}
		else
		{
			redirect('home');
		}
	}

	function edit()
	{
		if ($this->session->userdata('level') == 'pengelola') {
				if (isset($_POST['submit'])) {
						$this->mod_user->update();
						redirect('pengelola/user');
				}else {
						$id          = $this->uri->segment(4);
						$data['row'] = $this->db->get_where('tbl_user',array('id_user'=>$id))->row_array();
						$this->load->view('pengelola/edit-user',$data);
				}
		}
		else
		{
			redirect('home');
		}
	}

	function delete()
	{
		if ($this->session->userdata('level') == 'pengelola') {
				$this->db->where('id_user',$this->uri->segment(4));
				$this->db->delete('tbl_user');
				redirect('pengelola/user');
		}
		else
		{
			redirect('home');
		}
	}

}
