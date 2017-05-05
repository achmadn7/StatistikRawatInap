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
  }


 ?>
