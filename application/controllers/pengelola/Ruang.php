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
		if ($this->session->userdata('level') == 'pengelola')
		{
			$data['record']= $this->mod_ruang->select_all()->result();
			$this->load->view('pengelola/ruang',$data);
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
						$this->mod_ruang->save();
						redirect('pengelola/ruang');
				}else {
					$data['kelas']= $this->mod_ruang->select_kelas()->result();
					$this->load->view('pengelola/tambah-ruang',$data);
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
						$this->mod_ruang->update();
						redirect('pengelola/ruang');
				}else {
						$id          = $this->uri->segment(4);
						$data['row'] = $this->db->get_where('tbl_ruang',array('id_ruang'=>$id))->row_array();
						$data['kelas']= $this->mod_ruang->select_kelas()->result();
						$this->load->view('pengelola/edit-ruang',$data);
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
				$this->db->where('id_ruang',$this->uri->segment(4));
				$this->db->delete('tbl_ruang');
				redirect('pengelola/ruang');
		}
		else
		{
			redirect('home');
		}
	}

}
