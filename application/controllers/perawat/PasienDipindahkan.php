<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasienDipindahkan extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('mod_pasien_dipindahkan');
	}

	public function index()
	{
		if ($this->session->userdata('level') == 'perawat')
		{
			$data['ruang']= $this->mod_pasien_dipindahkan->select_ruang()->result();
			$data['record']= $this->mod_pasien_dipindahkan->select_all()->result();
			$this->load->view('perawat/pasien-dipindahkan',$data);
		}
		else
		{
			redirect('home');
		}
	}

	function post()
	{
		if ($this->session->userdata('level') == 'perawat') {
				if (isset($_POST['submit'])) {
						$this->mod_pasien_dipindahkan->save();
						redirect('perawat/pasiendipindahkan');
				}else {
					$data['ruang']= $this->mod_pasien_dipindahkan->select_ruang()->result();
					$data['kelas']= $this->mod_pasien_dipindahkan->select_kelas()->result();
					$data['spesialis']= $this->mod_pasien_dipindahkan->select_spesialis()->result();
					$this->load->view('perawat/tambah-pdipindahkan',$data);
				}
		}
		else
		{
			redirect('home');
		}
	}

	function edit()
	{
		if ($this->session->userdata('level') == 'perawat') {
				if (isset($_POST['submit'])) {
						$this->mod_pasien_dipindahkan->update();
						redirect('perawat/pasiendipindahkan');
				}else {
						$id          			= $this->uri->segment(4);
						$data['row'] 			= $this->db->get_where('tbl_pasien_dipindahkan',array('no_rm'=>$id))->row_array();
						$data['ruang']		= $this->mod_pasien_dipindahkan->select_ruang()->result();
						$data['kelas']		= $this->mod_pasien_dipindahkan->select_kelas()->result();
						$data['spesialis']= $this->mod_pasien_dipindahkan->select_spesialis()->result();
						$this->load->view('perawat/edit-pdipindahkan',$data);
				}
		}
		else
		{
			redirect('home');
		}
	}

	function delete()
	{
		if ($this->session->userdata('level') == 'perawat') {
				$this->db->where('no_rm',$this->uri->segment(4));
				$this->db->delete('tbl_pasien_dipindahkan');
				redirect('perawat/pasiendipindahkan');
		}
		else
		{
			redirect('home');
		}
	}

}
