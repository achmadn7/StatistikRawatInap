<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasienMasuk extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('mod_pasien_masuk');
	}

	public function index()
	{
		if ($this->session->userdata('level') == 'perawat')
		{
			$data['record']= $this->mod_pasien_masuk->select_all()->result();
			$this->load->view('perawat/pasien-masuk',$data);
		}
		else
		{
			redirect('home');
		}
	}

	function post()
	{
			if (isset($_POST['submit'])) {
					$this->mod_pasien_masuk->save();
					redirect('perawat/pasienmasuk');
			}else {
				$data['ruang']= $this->mod_pasien_masuk->select_ruang()->result();
				$data['kelas']= $this->mod_pasien_masuk->select_kelas()->result();
				$data['spesialis']= $this->mod_pasien_masuk->select_spesialis()->result();
				$this->load->view('perawat/tambah-pmasuk',$data);
			}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
				$this->mod_pasien_masuk->update();
				redirect('perawat/pasienmasuk');
		}else {
				$id          			= $this->uri->segment(4);
				$data['row'] 			= $this->db->get_where('tbl_pasien_masuk',array('no_rm'=>$id))->row_array();
				$data['ruang']		= $this->mod_pasien_masuk->select_ruang()->result();
				$data['kelas']		= $this->mod_pasien_masuk->select_kelas()->result();
				$data['spesialis']= $this->mod_pasien_masuk->select_spesialis()->result();
				$this->load->view('perawat/edit-pmasuk',$data);
		}
	}

	function delete()
	{
		$this->db->where('no_rm',$this->uri->segment(4));
		$this->db->delete('tbl_pasien_masuk');
		redirect('perawat/pasienmasuk');
	}

}
