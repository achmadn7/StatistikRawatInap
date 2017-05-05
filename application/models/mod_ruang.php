<?php
  /**
   *
   */
  class mod_ruang extends ci_model
  {

    function select_all()
    {
      $query="SELECT tb1.nama_ruang, tb1.jml_tt,tb2.nama_kelas
              FROM tbl_ruang as tb1,tbl_kelas as tb2
              WHERE tb1.id_kelas=tb2.id_kelas";
      return $this->db->query($query);
    }
  }


 ?>
