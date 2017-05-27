<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spesialis extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('mod_spesialis');
	}

	public function index()
	{
		if ($this->session->userdata('level') == 'pengelola')
		{
			$data['record']= $this->mod_spesialis->select_all()->result();
			$this->load->view('pengelola/spesialis',$data);
		}
		else
		{
			redirect('home');
		}
	}

	function post()
	{
			if ($this->session->userdata('level') == 'pengelola') {
					$this->mod_user->save();
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
						redirect('pengelola/spesialis');
				}else {
						$data['record']= $this->mod_spesialis->select_all()->result();
						$id          = $this->uri->segment(4);
						$data['row'] = $this->db->get_where('tbl_spesialis',array('id_spesialis'=>$id))->row_array();
						$this->load->view('pengelola/edit-spesialis',$data);
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
				$this->db->where('id_spesialis',$this->uri->segment(4));
				$this->db->delete('tbl_spesialis');
				redirect('pengelola/spesialis');
		}
		else
		{
			redirect('home');
		}
	}

}
