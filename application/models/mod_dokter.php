<?php
  /**
   *
   */
  class mod_dokter extends ci_model
  {

    function select_all()
    {
      $query="SELECT tb1.id_dokter, tb1.nama,tb2.nama_spesialis
              FROM tbl_dokter as tb1,tbl_spesialis as tb2
              WHERE tb1.id_spesialis=tb2.id_spesialis";
      return $this->db->query($query);
    }

    function select_spesialis()
    {
      return $this->db->get_where('tbl_spesialis');
    }

    function save()
    {
      $data=array(
                  'id_dokter'     => $this->input->post('nik'),
                  'nama'          => $this->input->post('nama'),
                  'id_spesialis'  => $this->input->post('spesialis'));
      $this->db->insert('tbl_dokter',$data);
    }

    function update()
    {
      $data=array(
                  'id_dokter'     => $this->input->post('nik'),
                  'nama'          => $this->input->post('nama'),
                  'id_spesialis'  => $this->input->post('id_spesialis'));
      $this->db->where('id_dokter',$this->input->post('id'));
      $this->db->update('tbl_dokter',$data);
    }

  }
 ?>
