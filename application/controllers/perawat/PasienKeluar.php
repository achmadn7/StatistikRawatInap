<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasienKeluar extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('mod_pasien_keluar');
	}

	public function index()
	{
		if ($this->session->userdata('level') == 'perawat')
		{
			$data['ruang']= $this->mod_pasien_keluar->select_ruang()->result();
			$data['record']= $this->mod_pasien_keluar->select_all()->result();
			$this->load->view('perawat/pasien-keluar',$data);
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
          $this->mod_pasien_keluar->save();
          redirect('perawat/pasienkeluar');
      }else {
        $data['ruang']= $this->mod_pasien_keluar->select_ruang()->result();
        $data['kelas']= $this->mod_pasien_keluar->select_kelas()->result();
        $data['spesialis']= $this->mod_pasien_keluar->select_spesialis()->result();
        $this->load->view('perawat/tambah-pkeluar',$data);
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
          $this->mod_pasien_keluar->update();
          redirect('perawat/pasienkeluar');
      }else {
          $id          			= $this->uri->segment(4);
          $data['row'] 			= $this->db->get_where('tbl_pasien_keluar',array('no_rm'=>$id))->row_array();
          $data['ruang']		= $this->mod_pasien_keluar->select_ruang()->result();
          $data['kelas']		= $this->mod_pasien_keluar->select_kelas()->result();
          $data['spesialis']= $this->mod_pasien_keluar->select_spesialis()->result();
          $this->load->view('perawat/edit-pkeluar',$data);
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
      $this->db->delete('tbl_pasien_keluar');
      redirect('perawat/pasienkeluar');
    }
    else
    {
      redirect('home');
    }
	}

}
