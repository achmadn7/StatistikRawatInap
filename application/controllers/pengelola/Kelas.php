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
		if ($this->session->userdata('level') == 'pengelola')
		{
			$data['record']= $this->mod_kelas->select_all()->result();
			$this->load->view('pengelola/kelas',$data);
		}
		else
		{
			redirect('home');
		}
	}

	function post()
	{
		if ($this->session->userdata('level') == 'pengelola') {
				$this->mod_kelas->save();
				redirect('pengelola/kelas');
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
						$this->mod_spesialis->update();
						redirect('pengelola/kelas');
				}else {
						$data['record']= $this->mod_kelas->select_all()->result();
						$id          = $this->uri->segment(4);
						$data['row'] = $this->db->get_where('tbl_kelas',array('id_kelas'=>$id))->row_array();
						$this->load->view('pengelola/edit-kelas',$data);
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
				$this->db->where('id_kelas',$this->uri->segment(4));
				$this->db->delete('tbl_kelas');
				redirect('pengelola/kelas');
		}
		else
		{
			redirect('home');
		}
	}

}
