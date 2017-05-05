<?php
  /**
   *
   */
  class mod_kelas extends ci_model
  {

    function select_all()
    {
      return $this->db->get('tbl_kelas');
    }
  }


 ?>
