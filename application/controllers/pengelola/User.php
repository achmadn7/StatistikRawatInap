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
		$data['record']= $this->mod_user->select_all()->result();
		$this->load->view('pengelola/user',$data);
	}

	function post()
	{
		if (isset($_POST['submit'])) {
				$this->mod_user->save();
				redirect('pengelola/user');
		}else {
			$this->load->view('pengelola/tambah-user');
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
				$this->mod_user->update();
				redirect('pengelola/user');
		}else {
				$id          = $this->uri->segment(4);
				$data['row'] = $this->db->get_where('tbl_user',array('id_user'=>$id))->row_array();
				$this->load->view('pengelola/edit-user',$data);
		}
	}

	function delete()
	{
		$this->db->where('id_user',$this->uri->segment(4));
		$this->db->delete('tbl_user');
		redirect('pengelola/user');
	}

}
