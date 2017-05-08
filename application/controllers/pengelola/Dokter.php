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
		if ($this->session->userdata('level') == 'pengelola')
		{
			$data['record']= $this->mod_dokter->select_all()->result();
			$this->load->view('pengelola/dokter',$data);
		}
		else
		{
			redirect('home');
		}
	}

	function post()
	{
		if (isset($_POST['submit'])) {
				$this->mod_dokter->save();
				redirect('pengelola/dokter');
		}else {
			$data['spesialis']= $this->mod_dokter->select_spesialis()->result();
			$this->load->view('pengelola/tambah-dokter',$data);
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
				$this->mod_dokter->update();
				redirect('pengelola/dokter');
		}else {
				$id          = $this->uri->segment(4);
				$data['row'] = $this->db->get_where('tbl_dokter',array('id_dokter'=>$id))->row_array();
				$data['spesialis']= $this->mod_dokter->select_spesialis()->result();
				$this->load->view('pengelola/edit-dokter',$data);
		}
	}

	function delete()
	{
		$this->db->where('id_dokter',$this->uri->segment(4));
		$this->db->delete('tbl_dokter');
		redirect('pengelola/dokter');
	}

}
