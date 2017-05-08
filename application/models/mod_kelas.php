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

    function save()
    {
      $data=array(
                  'nama_kelas'    => $this->input->post('nama_kelas'));
      $this->db->insert('tbl_kelas',$data);
    }

    function update()
    {
      $data=array(
                  'nama_kelas'    => $this->input->post('nama_kelas'));
      $this->db->where('id_kelas',$this->input->post('id'));
      $this->db->update('tbl_kelas',$data);
    }

  }
 ?>
