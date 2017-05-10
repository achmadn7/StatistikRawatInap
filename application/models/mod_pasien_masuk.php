<?php
  /**
   *
   */
  class mod_pasien_masuk extends ci_model
  {

    function select_all()
    {
      $query="SELECT tb1.no_rm,tb1.nama_pasien,tb1.hari,tb1.tgl_masuk,tb2.id_ruang,tb2.nama_ruang,tb2.jml_tt,tb3.id_kelas,tb3.nama_kelas,tb4.id_spesialis,tb4.nama_spesialis
              FROM tbl_pasien_masuk as tb1,tbl_ruang as tb2, tbl_kelas as tb3, tbl_spesialis as tb4
              WHERE tb1.id_ruang=tb2.id_ruang and tb1.id_kelas=tb3.id_kelas and tb1.id_spesialis=tb4.id_spesialis";
      return $this->db->query($query);
    }

    function select_ruang()
    {
      return $this->db->get_where('tbl_ruang');
    }

    function select_kelas()
    {
      return $this->db->get_where('tbl_kelas');
    }

  }
 ?>
