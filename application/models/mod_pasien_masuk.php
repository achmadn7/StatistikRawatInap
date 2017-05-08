<?php
  /**
   *
   */
  class mod_pasien_masuk extends ci_model
  {

    function select_all()
    {
      $query="SELECT tb1.id_pasien_masuk,tb1.nama_pasien,tb1.hari,tb1.tgl_masuk,tb2.no_rm,tb2.alamat,tb3.id_ruang,tb3.nama_ruang,tb3.jml_tt,tb4.id_kelas,tb4.nama_kelas
              FROM tbl_pasien_masuk as tb1,tbl_pasien as tb2,tbl_ruang as tb3, tbl_kelas as tb4
              WHERE tb1.no_rm=tb2.no_rm and tb1.id_ruang=tb3.id_ruang and tb1.id_kelas=tb4.id_kelas";
      return $this->db->query($query);
    }


  }
 ?>
